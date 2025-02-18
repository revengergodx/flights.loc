@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-10 p-6 max-w-lg bg-white shadow-lg rounded-xl">
        <h1 class="text-2xl font-bold text-center mb-6">Пошук авіарейсів</h1>

        <form action="{{ route('flights.search') }}" method="GET" class="space-y-4" onsubmit="return validateForm()">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="from" class="block text-sm font-medium text-gray-700">Звідки</label>
                    <select id="from" name="from" required
                            class="block w-full mt-1 p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Оберіть місто</option>
                        @foreach($cities as $city)
                            <option value="{{ $city->name }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="to" class="block text-sm font-medium text-gray-700">Куди</label>
                    <select id="to" name="to" required
                            class="block w-full mt-1 p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Оберіть місто</option>
                        @foreach($cities as $city)
                            <option value="{{ $city->name }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700">Дата вильоту</label>
                    <input type="date" id="date" name="date" required
                           class="block w-full mt-1 p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="passengers" class="block text-sm font-medium text-gray-700">Пасажири</label>
                    <input type="number" id="passengers" name="passengers" min="1" max="10" placeholder="Вкажіть кількість"
                           class="block w-full mt-1 p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <p id="passenger-error" class="text-red-500 text-sm hidden">Будь ласка, виберіть кількість пасажирів</p>
                </div>
            </div>
            <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 rounded-lg font-semibold hover:bg-blue-600 hover:shadow-md transition">
                Знайти рейси
            </button>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let today = new Date().toISOString().split('T')[0];
            document.getElementById("date").setAttribute("min", today);
        });

        document.getElementById("from").addEventListener("change", function () {
            let fromValue = this.value;
            let toSelect = document.getElementById("to");

            for (let option of toSelect.options) {
                option.disabled = option.value === fromValue;
            }
        });

        document.getElementById("to").addEventListener("change", function () {
            let toValue = this.value;
            let fromSelect = document.getElementById("from");

            for (let option of fromSelect.options) {
                option.disabled = option.value === toValue;
            }
        });

        function validateForm() {
            let passengersInput = document.getElementById("passengers");
            let errorText = document.getElementById("passenger-error");

            if (!passengersInput.value || passengersInput.value < 1) {
                passengersInput.classList.add("border-red-500");
                errorText.classList.remove("hidden");
                return false;
            }
            return true;
        }
    </script>
@endsection
