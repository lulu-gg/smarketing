@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Edit SPG Program
    </h2>
@endsection

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Edit SPG Program</h1>
        <form action="{{ route('user.spg_programs.update', $spgProgram->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="ecc" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">ECC</label>
                <input type="number" name="ecc" id="ecc" value="{{ $spgProgram->ecc }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="ps" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">PS</label>
                <input type="number" name="ps" id="ps" value="{{ $spgProgram->ps }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="usia" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Usia</label>
                <input type="number" name="usia" id="usia" value="{{ $spgProgram->usia }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
        </form>
    </div>
@endsection
