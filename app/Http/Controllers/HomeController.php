<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        $cars = Car::when($query, function ($q) use ($query) {
            $q->where('name', 'like', "%{$query}%")
                ->orWhere('make', 'like', "%{$query}%")
                ->orWhere('brand', 'like', "%{$query}%");
        })->get();

        return view('welcome', compact('cars'));
    }

}
