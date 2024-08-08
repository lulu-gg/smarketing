@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Report
    </h2>
@endsection

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Report</h1>
        <form action="{{ route('user.spg_programs.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="ecc" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">ECC</label>
                <input type="number" name="ecc" id="ecc" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="ps" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">PS</label>
                <input type="number" name="ps" id="ps" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="usia" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Usia</label>
                <input type="number" name="usia" id="usia" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>
    </div>
@endsection
