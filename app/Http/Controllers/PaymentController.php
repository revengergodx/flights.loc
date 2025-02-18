<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function show($bookingId)
    {
        $booking = Booking::findOrFail($bookingId);
        return view('pages.payment', compact('booking'));
    }

    public function process(Request $request, $bookingId)
    {
        $booking = Booking::findOrFail($bookingId);
        $payment = Payment::create([
            'booking_id' => $booking->id,
            'amount' => $booking->total_price,
            'payment_status' => 'completed',
        ]);

        // Оновлення статусу бронювання
        $booking->update(['status' => 'confirmed']);

        return redirect()->route('profile')->with('success', 'Оплата успішна!');
    }
}
