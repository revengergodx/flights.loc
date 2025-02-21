@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Add New Flight</h2>

        <form action="{{ route('flights.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="airline" class="block text-sm font-medium text-gray-700">Airline</label>
                <input type="text" id="airline" name="airline" value="{{ old('airline') }}"
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="flight_number" class="block text-sm font-medium text-gray-700">Flight Number</label>
                <input type="text" id="flight_number" name="flight_number" value="{{ old('flight_number') }}"
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                @error('flight_number')
                <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="departure_airport_id" class="block text-sm font-medium text-gray-700">Select Departure
                    Airport</label>
                <select id="departure_airport_id" name="departure_airport_id"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                    @foreach($airports as $airport)
                        <option
                            value="{{ $airport->id }}" @selected(old('departure_airport_id') == $airport->id)>
                            {{ $airport->name }}, {{ $airport->city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="arrival_airport_id" class="block text-sm font-medium text-gray-700">Select Arrival
                    Airport</label>
                <select id="arrival_airport_id" name="arrival_airport_id"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                    @foreach($airports as $airport)
                        <option
                            value="{{ $airport->id }}" @selected(old('arrival_airport_id') == $airport->id)>
                            {{ $airport->name }}, {{ $airport->city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="departure_time" class="block text-sm font-medium text-gray-700">Departure Time</label>
                <div class="relative">
                    <input type="datetime-local" id="departure_time" name="departure_time" value="{{ old('departure_time') }}"
                           class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required
                           onchange="updateArrivalMinDate()">
                </div>
            </div>
            <div class="mb-4">
                <label for="arrival_time" class="block text-sm font-medium text-gray-700">Arrival Time</label>
                <div class="relative">
                    <input type="datetime-local" id="arrival_time" name="arrival_time" value="{{ old('arrival_time') }}"
                           class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                </div>
            </div>
            <div class="mb-4">
                <label for="total_seats" class="block text-sm font-medium text-gray-700">Total Seats</label>
                <input type="number" id="total_seats" name="total_seats" value="{{ old('total_seats') }}"
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="available_seats" class="block text-sm font-medium text-gray-700">Available Seats</label>
                <input type="number" id="available_seats" name="available_seats" value="{{ old('available_seats') }}"
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                @error('available_seats')
                <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" step="0.01" id="price" name="price" value="{{ old('price') }}"
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4 text-center">
                <button type="submit"
                        class="w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Add Flight
                </button>
            </div>
        </form>
    </div>
    <script>
        function setMinDateTime() {
            let now = new Date();
            let localDatetime = now.toISOString().slice(0, 16); // Отримуємо формат YYYY-MM-DD HH:MM

            document.getElementById('departure_time').min = localDatetime;
            document.getElementById('arrival_time').min = localDatetime;
        }

        function updateArrivalMinDate() {
            let departureTime = document.getElementById('departure_time').value;
            document.getElementById('arrival_time').min = departureTime;
        }

        window.onload = setMinDateTime;

        document.getElementById("departure_airport_id").addEventListener("change", function () {
            let fromValue = this.value;
            let toSelect = document.getElementById("arrival_airport_id");

            for (let option of toSelect.options) {
                option.disabled = option.value === fromValue;
            }
        });

        document.getElementById("arrival_airport_id").addEventListener("change", function () {
            let toValue = this.value;
            let fromSelect = document.getElementById("departure_airport_id");

            for (let option of fromSelect.options) {
                option.disabled = option.value === toValue;
            }
        });
    </script>
@endsection
