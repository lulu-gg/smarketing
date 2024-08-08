@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        SPG Program Details
    </h2>
@endsection

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">SPG Program Details</h1>
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg overflow-hidden p-4">
            <p><strong>ID:</strong> {{ $spgProgram->id }}</p>
            <p><strong>ECC:</strong> {{ $spgProgram->ecc }}</p>
            <p><strong>PS:</strong> {{ $spgProgram->ps }}</p>
            <p><strong>Usia:</strong> {{ $spgProgram->usia }}</p>
        </div>
    </div>
@endsection
