<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::where('available', true)->get();
        return view('admin.car_list.index', compact('cars'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'make' => 'required',
            'brand' => 'required',
            'year' => 'required|integer',
            'price_per_day' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('cars', 'public');
        } else {
            $imagePath = null;
        }

        Car::create([
            'name' => $request->name,
            'make' => $request->make,
            'brand' => $request->brand,
            'year' => $request->year,
            'price_per_day' => $request->price_per_day,
            'status' => 'active',
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.cars.index')->with('success', 'Car added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'make' => 'required',
        'brand' => 'required',
        'year' => 'required|integer',
        'price_per_day' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $car = Car::findOrFail($id);

    // Handle Image Upload if a new image is uploaded
    if ($request->hasFile('image')) {
        // Delete old image
        if ($car->image) {
            Storage::delete('public/' . $car->image);
        }
        // Store new image
        $imagePath = $request->file('image')->store('cars', 'public');
        $car->image = $imagePath;
    }

    $car->update([
        'name' => $request->name,
        'make' => $request->make,
        'brand' => $request->brand,
        'year' => $request->year,
        'price_per_day' => $request->price_per_day,
    ]);

    return redirect()->route('admin.cars.index')->with('success', 'Car updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $car = Car::findOrFail($id);

    // Delete image from storage
    if ($car->image) {
        Storage::delete('public/' . $car->image);
    }

    $car->delete();

    return redirect()->route('admin.cars.index')->with('success', 'Car deleted successfully');
}

}
