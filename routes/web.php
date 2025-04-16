<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/book/{id}', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/booking/{id}', [BookingController::class, 'index'])->name('book.index');
    Route::get('/bookings', [BookingController::class, 'list'])->name('admin.bookings.list');
    Route::get('/my-bookings', [BookingController::class, 'show'])->name('admin.bookings.show');

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



Route::middleware(['auth'])->group(function () {
    Route::get('/my-bookings', [BookingController::class, 'show'])->name('admin.bookings.show');

});
require __DIR__.'/auth.php';
