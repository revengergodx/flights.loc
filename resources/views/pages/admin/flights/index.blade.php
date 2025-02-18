@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-6 bg-white shadow-lg rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold text-gray-800">All Flights</h2>
            <a href="{{ route('flights.create') }}"
               class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                Add Flight
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-200">
                <thead>
                <tr class="bg-gray-100 text-gray-700 text-left">
                    <th class="p-1 border">Airline</th>
                    <th class="p-1 border">Flight Number</th>
                    <th class="p-1 border">Departure Airport</th>
                    <th class="p-1 border">Departure Time</th>
                    <th class="p-1 border">Arrival Airport</th>
                    <th class="p-1 border">Arrival Time</th>
                    <th class="p-1 border">Total Seats</th>
                    <th class="p-1 border">Available Seats</th>
                    <th class="p-1 border">Price</th>
                    <th class="p-1 border">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($flights as $flight)
                    <tr class="border hover:bg-gray-50">
                        <td class="p-1 border">{{ $flight->airline }}</td>
                        <td class="p-1 border">{{ $flight->flight_number }}</td>
                        <td class="p-1 border">{{ $flight->departureAirport->name }}</td>
                        <td class="p-1 border">{{ date('h:i d.m.Y', strtotime($flight->departure_time)) }}</td>
                        <td class="p-1 border">{{ $flight->arrivalAirport->name }}</td>
                        <td class="p-1 border">{{ $flight->arrival_time }}</td>
                        <td class="p-1 border">{{ $flight->total_seats }}</td>
                        <td class="p-1 border">{{ $flight->available_seats }}</td>
                        <td class="p-1 border text-green-600 font-bold">{{ $flight->price }} ₴</td>
                        <td class="p-2 border flex justify-center gap-2">
                            <a href="{{ route('flights.edit', $flight->id) }}"
                               class="px-3 py-1 text-black no-underline bg-blue-400 rounded hover:bg-blue-500">
                                Edit
                            </a>
                            <form action="{{ route('flights.delete', $flight->id) }}" method="POST"
                                  onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-black px-3 py-1 rounded hover:bg-red-600">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
