<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BookingController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

// Authenticated user routes
Route::middleware(['auth', 'admin'])->group(function () {
    
    Route::post('/book/{id}', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/booking/{id}', [BookingController::class, 'index'])->name('book.index');
});

// Admin routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/booking/list', [BookingController::class, 'list'])->name('admin.bookings.list');

    Route::resource('/admin/cars', CarController::class)->names([
        'index' => 'admin.cars.index',
        'create' => 'admin.cars.create',
        'store' => 'admin.cars.store',
        'show' => 'admin.cars.show',
        'edit' => 'admin.cars.edit',
        'update' => 'admin.cars.update',
        'destroy' => 'admin.cars.destroy',
    ]);
});

require __DIR__.'/auth.php';
