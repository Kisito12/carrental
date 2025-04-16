<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->isAdmin()) {
                // Proceed to admin section
                return $next($request);
            }

            if ($user->isUser()) {
                // Redirect to user booking dashboard
                return redirect()->route('admin.bookings.show')->with('info', 'Redirected to your dashboard.');
            }
        }

        // Redirect unauthenticated or unauthorized access
        return redirect('/')->with('error', 'Access denied.');
    }
}
