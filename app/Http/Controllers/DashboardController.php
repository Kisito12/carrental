<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'car'])->orderBy('created_at', 'desc')->paginate(5);
        // Total number of cars
        $totalCars = Car::count();

        // Total booked cars (unique cars that have at least one booking)
        $bookedCars = Booking::distinct('car_id')->count('car_id');

        // Total amount earned (from approved bookings)
        $totalEarned = Booking::where('status', 'approved')->sum('total_price');
        return view('admin.dashboard', compact('bookings', 'totalCars', 'bookedCars', 'totalEarned'));
    }
}
