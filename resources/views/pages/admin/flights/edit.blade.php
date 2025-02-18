@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Add New Flight</h2>

        <form action="{{ route('flights.update') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="airline" class="block text-sm font-medium text-gray-700">Airline</label>
                <input type="text" id="airline" name="airline" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="flight_number" class="block text-sm font-medium text-gray-700">Flight Number</label>
                <input type="text" id="flight_number" name="flight_number" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="departure_airport_id" class="block text-sm font-medium text-gray-700">Departure Airport</label>
                <select id="departure_airport_id" name="departure_airport_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                    <option value="">Select Departure Airport</option>
{{--                    @foreach($airports as $airport)--}}
                    {{--                        <option value="{{ $airport->id }}">{{ $airport->name }}</option>--}}
                    {{--                    @endforeach--}}
                </select>
            </div>

            <div class="mb-4">
                <label for="arrival_airport_id" class="block text-sm font-medium text-gray-700">Arrival Airport</label>
                <select id="arrival_airport_id" name="arrival_airport_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                    <option value="">Select Arrival Airport</option>
{{--                    @foreach($airports as $airport)--}}
{{--                        <option value="{{ $airport->id }}">{{ $airport->name }}</option>--}}
{{--                    @endforeach--}}
                </select>
            </div>

            <div class="mb-4">
                <label for="departure_time" class="block text-sm font-medium text-gray-700">Departure Time</label>
                <input type="datetime-local" id="departure_time" name="departure_time" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="arrival_time" class="block text-sm font-medium text-gray-700">Arrival Time</label>
                <input type="datetime-local" id="arrival_time" name="arrival_time" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="total_seats" class="block text-sm font-medium text-gray-700">Total Seats</label>
                <input type="number" id="total_seats" name="total_seats" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="available_seats" class="block text-sm font-medium text-gray-700">Available Seats</label>
                <input type="number" id="available_seats" name="available_seats" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" step="0.01" id="price" name="price" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4 text-center">
                <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Add Flight
                </button>
            </div>
        </form>
    </div>
@endsection
