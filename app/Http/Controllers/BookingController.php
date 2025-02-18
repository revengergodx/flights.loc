<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function show($flightId)
    {
        $flight = Flight::findOrFail($flightId);
        return view('pages.booking', compact('flight'));
    }

    public function confirm(Request $request, $flightId)
    {
        $flight = Flight::findOrFail($flightId);

        // Перевірка наявності місць
        if ($flight->available_seats < 1) {
            return redirect()->back()->with('error', 'Немає вільних місць');
        }

        $booking = Booking::create([
            'user_id' => Auth::id(),
            'flight_id' => $flight->id,
            'status' => 'pending',
            'total_price' => $flight->price,
            'travel_date' => $request->input('travel_date'),
        ]);

        // Оновлення кількості доступних місць
        $flight->decrement('available_seats');

        return redirect()->route('payment', $booking->id)->with('success', 'Бронювання створено!');
    }
}

