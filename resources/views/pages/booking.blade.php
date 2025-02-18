@extends('layouts.app')

@section('title', 'Booking')

@section('content')
    <div class="max-w-lg mx-auto bg-white p-6 shadow-md rounded-lg">
        <h2 class="text-xl font-bold mb-4">Flight booking</h2>

        <p><strong>Flight:</strong> {{ $flight->airline }} - {{ $flight->flight_number }}</p>
        <p><strong>Departure:</strong> {{ $flight->departureAirport->name }} → {{ $flight->arrivalAirport->name }}</p>
        <p><strong>Price:</strong> ${{ $flight->price }}</p>

        <form action="{{ route('booking.confirm', $flight->id) }}" method="POST">
            @csrf
            <input type="text" name="full_name" placeholder="Your name" class="border p-2 w-full rounded mb-2">
            <input type="email" name="email" placeholder="Email" class="border p-2 w-full rounded mb-2">
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded w-full">Confirm</button>
        </form>
    </div>
@endsection
