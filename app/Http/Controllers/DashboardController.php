<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'car'])->orderBy('created_at', 'desc')->paginate(5);
        return view('admin.dashboard', compact('bookings'));
    }
}
