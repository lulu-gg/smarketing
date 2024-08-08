@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Create Schedule
    </h2>
@endsection

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Create Schedule</h1>
        <form action="{{ route('admin.schedules.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="venue_name" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Venue Name</label>
                <input type="text" name="venue_name" id="venue_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="check_in_time" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Check-In Time</label>
                <input type="time" name="check_in_time" id="check_in_time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="check_out_time" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Check-Out Time</label>
                <input type="time" name="check_out_time" id="check_out_time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="longitude" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Longitude</label>
                <input type="text" name="longitude" id="longitude" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="latitude" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Latitude</label>
                <input type="text" name="latitude" id="latitude" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Schedule</button>
        </form>
    </div>
@endsection
