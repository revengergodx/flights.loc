<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(FlightController::class)->prefix('flights')->as('flights.')->group(function () {
    Route::get('/search', 'search')->name('search');
    Route::get('/','index')->name('index');
    Route::get('/create','create')->name('create');
    Route::POST('/create','store')->name('store');
    Route::get('/{flight}/edit','edit')->name('edit');
    Route::PATCH('/{flight}/edit','update')->name('update');
    Route::delete('/{flight}','delete')->name('delete');
});

Route::get('/booking/{flight}', [BookingController::class, 'show'])->name('booking');
Route::post('/booking/{flight}/confirm', [BookingController::class, 'confirm'])->name('booking.confirm');

Route::get('/payment/{booking}', [PaymentController::class, 'show'])->name('payment');
Route::post('/payment/{booking}/process', [PaymentController::class, 'process'])->name('payment.process');



require __DIR__.'/auth.php';
