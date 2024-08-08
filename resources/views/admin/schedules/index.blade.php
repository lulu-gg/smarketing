@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Schedules
    </h2>
@endsection

@section('content')
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Schedules</h1>
            <a href="{{ route('admin.schedules.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Schedule</a>
        </div>
        <div class="grid grid-cols-1 gap-4">
            @foreach($schedules as $schedule)
                <!-- Horizontal Card for Schedule Details, Proof Images, and Map -->
                <div class="bg-white dark:bg-gray-800 shadow rounded-lg overflow-hidden p-4 flex flex-col lg:flex-row justify-between h-auto space-y-4 lg:space-y-0 lg:space-x-4">
                    <!-- Vertical Card for Schedule Details and Map -->
                    <div class="bg-gray-100 dark:bg-gray-700 shadow rounded-lg overflow-hidden p-4 flex flex-col justify-between w-full lg:w-1/3" style="height: 250px; aspect-ratio: 1 / 1;">
                        <div>
                            <h3 class="text-lg font-bold">{{ $schedule->venue_name }}</h3>
                            <p class="text-sm mb-2"><strong>ID:</strong> {{ $schedule->id }}</p>
                            <p class="text-sm mb-2"><strong>Check-In Time:</strong> {{ \Carbon\Carbon::parse($schedule->check_in_time)->format('H:i') }}</p>
                            <p class="text-sm mb-2"><strong>Check-Out Time:</strong> {{ \Carbon\Carbon::parse($schedule->check_out_time)->format('H:i') }}</p>
                        </div>
                        <div id="map-{{ $schedule->id }}" class="w-full h-full"></div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                var map = L.map('map-{{ $schedule->id }}').setView([{{ $schedule->latitude }}, {{ $schedule->longitude }}], 13);
                                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                                }).addTo(map);
                                L.marker([{{ $schedule->latitude }}, {{ $schedule->longitude }}]).addTo(map);
                            });
                        </script>
                    </div>

                    <!-- Vertical Card for Check-In Image -->
                    <div class="bg-gray-100 dark:bg-gray-700 shadow rounded-lg overflow-hidden p-4 flex flex-col justify-between w-full lg:w-1/3" style="height: 250px; aspect-ratio: 1 / 1;">
                        <div>
                            <h3 class="text-lg font-bold mb-2">Check-In Image</h3>
                            @if ($schedule->check_in_image)
                                <img src="{{ asset('storage/' . $schedule->check_in_image) }}" alt="Check-In Image" class="w-full h-auto mb-2" style="max-height: 150px;">
                                <p class="text-sm text-gray-600 dark:text-gray-400">Uploaded at: {{ \Carbon\Carbon::parse($schedule->check_in_uploaded_at)->format('d M Y, H:i') }}</p>
                            @else
                                <p class="text-sm text-gray-600 dark:text-gray-400">No check-in image uploaded.</p>
                            @endif
                        </div>
                    </div>

                    <!-- Vertical Card for Check-Out Image -->
                    <div class="bg-gray-100 dark:bg-gray-700 shadow rounded-lg overflow-hidden p-4 flex flex-col justify-between w-full lg:w-1/3" style="height: 250px; aspect-ratio: 1 / 1;">
                        <div>
                            <h3 class="text-lg font-bold mb-2">Check-Out Image</h3>
                            @if ($schedule->check_out_image)
                                <img src="{{ asset('storage/' . $schedule->check_out_image) }}" alt="Check-Out Image" class="w-full h-auto mb-2" style="max-height: 150px;">
                                <p class="text-sm text-gray-600 dark:text-gray-400">Uploaded at: {{ \Carbon\Carbon::parse($schedule->check_out_uploaded_at)->format('d M Y, H:i') }}</p>
                            @else
                                <p class="text-sm text-gray-600 dark:text-gray-400">No check-out image uploaded.</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
