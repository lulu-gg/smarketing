@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
    </h2>
@endsection

@section('content')
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Schedule Count Card -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                <div class="flex items-center">
                    <div class="text-3xl font-bold text-gray-800 dark:text-gray-200 mr-4">
                        {{ $scheduleCount }}
                    </div>
                    <div class="text-lg text-gray-600 dark:text-gray-400">
                        Schedules
                    </div>
                </div>
            </div>
            
            <!-- SPG Program Count Card -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                <div class="flex items-center">
                    <div class="text-3xl font-bold text-gray-800 dark:text-gray-200 mr-4">
                        {{ $spgProgramCount }}
                    </div>
                    <div class="text-lg text-gray-600 dark:text-gray-400">
                        SPG Programs
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Chart -->
        <div class="mt-8">
            <canvas id="myChart"></canvas>
        </div>
    </div>


@endsection
