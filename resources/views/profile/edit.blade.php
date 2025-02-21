@extends('layouts.app')

@section('title', 'Profile edit')

@section('content')
    <div class="py-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <a href="{{ route('profile.index') }}"
               class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600"> Back </a>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
    </div>
@endsection

