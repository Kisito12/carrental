<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{

    public function index($id)
    {
        $car = Car::findOrFail($id);
        return view('booking.index', compact('car'));
    }
    public function list()
    {
        $bookings = Booking::with(['user', 'car'])->orderBy('created_at', 'desc')->get();
        return view('booking.list', compact('bookings'));
    }

    public function store(Request $request, $carId)
    {
        $request->validate([
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        $car = Car::findOrFail($carId); // Fetch the car using ID

        $totalDays = (strtotime($request->end_date) - strtotime($request->start_date)) / 86400;
        $totalPrice = ceil($totalDays) * $car->price_per_day;

        Booking::create([
            'user_id' => Auth::id(),
            'car_id' => $car->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        return redirect()->route('admin.bookings.list')->with('success', 'Booking request sent');
    }

}
