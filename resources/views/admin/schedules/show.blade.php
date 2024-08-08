@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Schedule Details
    </h2>
@endsection

@section('content')
    <div class="container mx-auto p-4">
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg overflow-hidden">
            <div class="p-4">
                <h3 class="text-lg font-bold mb-2">{{ $schedule->venue_name }}</h3>
                <p class="text-sm mb-2"><strong>ID:</strong> {{ $schedule->id }}</p>
                <p class="text-sm mb-2"><strong>Check-In Time:</strong> {{ $schedule->check_in_time }}</p>
                <p class="text-sm mb-2"><strong>Check-Out Time:</strong> {{ $schedule->check_out_time }}</p>
                <div id="map-{{ $schedule->id }}" class="w-full h-64 mb-2"></div>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var map = L.map('map-{{ $schedule->id }}').setView([{{ $schedule->latitude }}, {{ $schedule->longitude }}], 13);
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);
                        L.marker([{{ $schedule->latitude }}, {{ $schedule->longitude }}]).addTo(map);
                    });
                </script>
                @if ($schedule->check_in_image)
                    <div class="mb-4">
                        <h4 class="font-bold">Check-In Image</h4>
                        <img src="{{ asset('storage/' . $schedule->check_in_image) }}" alt="Check-In Image" class="w-full h-auto">
                    </div>
                @endif
                @if ($schedule->check_out_image)
                    <div class="mb-4">
                        <h4 class="font-bold">Check-Out Image</h4>
                        <img src="{{ asset('storage/' . $schedule->check_out_image) }}" alt="Check-Out Image" class="w-full h-auto">
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
