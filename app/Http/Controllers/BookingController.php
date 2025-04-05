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

    public function show()
    {
        $user_id = Auth::user()->id;
        $bookings = Booking::with(['car'])->where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
        // dd($bookings);
        return view('booking.single', compact('bookings'));
    }

    public function store(Request $request, $carId)
    {
        $request->validate([
            'booking_range' => 'required|string',
        ]);

        $dates = explode(' - ', $request->booking_range);
        $startDate = date('Y-m-d', strtotime($dates[0]));
        $endDate = date('Y-m-d', strtotime($dates[1]));

        $car = Car::findOrFail($carId);

        $totalDays = (strtotime($endDate) - strtotime($startDate)) / 86400;
        $totalPrice = ceil($totalDays) * $car->price_per_day;

        Booking::create([
            'user_id' => Auth::id(),
            'car_id' => $car->id,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        return redirect()->route('admin.bookings.list')->with('success', 'Booking request sent');
    }

}
