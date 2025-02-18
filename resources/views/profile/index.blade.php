@extends('layouts.app')

@section('title', 'My Bookings')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold">My Bookings</h2>
            <a href="{{ route('profile.edit') }}"
               class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-blue-600 transition">
                Edit profile
            </a>
        </div>
{{--        @foreach($bookings as $booking)--}}
            <div class="bg-white p-4 rounded shadow mb-4">
                <p><strong>Flight:</strong> </p>
                <p><strong>Date:</strong> </p>
                <p><strong>Status:</strong> </p>
                <p><strong>Price:</strong> </p>
            </div>
{{--        @endforeach--}}
    </div>
@endsection
