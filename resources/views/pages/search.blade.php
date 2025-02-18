@extends('layouts.app')

@section('title', 'Search results')

@section('content')
    <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold mb-4">Доступні рейси</h2>

        @foreach($flights as $flight)
            <div class="bg-white p-4 rounded shadow mb-4">
                <h3 class="text-lg font-semibold">{{ $flight->airline }} - {{ $flight->flight_number }}</h3>
                <p class="text-gray-600">{{ $flight->departureAirport->name }} → {{ $flight->arrivalAirport->name }}</p>
                <p class="text-gray-600">Date: {{ $flight->departure_time }}</p>
                <p class="text-gray-600">Price: <strong>${{ $flight->price }}</strong></p>
                <a href="{{ route('booking', $flight->id) }}"
                   class="bg-green-500 text-white px-4 py-2 rounded inline-block mt-2">Забронювати</a>
            </div>
        @endforeach
    </div>
@endsection
