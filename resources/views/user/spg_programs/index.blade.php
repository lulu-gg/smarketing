@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        SPG Apps
    </h2>
@endsection

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">SPG Apps</h1>
        <div class="flex justify-between mb-4">
            <a href="{{ route('user.spg_programs.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create SPG Program</a>
        </div>
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600 mt-4">
            <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th class="border-b dark:border-slate-600 font-medium p-4 text-slate-400 dark:text-slate-200 text-left">CC</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 text-slate-400 dark:text-slate-200 text-left">ECC</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 text-slate-400 dark:text-slate-200 text-left">PS</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 text-slate-400 dark:text-slate-200 text-left">Usia</th>
                    <th class="border-b dark:border-slate-600 font-medium p-4 text-slate-400 dark:text-slate-200 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800">
                @foreach($spgPrograms as $program)
                    <tr>
                        <td class="border-b border-gray-200 dark:border-slate-600 p-4">{{ $program->id }}</td>
                        <td class="border-b border-gray-200 dark:border-slate-600 p-4">{{ $program->ecc }}</td>
                        <td class="border-b border-gray-200 dark:border-slate-600 p-4">{{ $program->ps }}</td>
                        <td class="border-b border-gray-200 dark:border-slate-600 p-4">{{ $program->usia }}</td>
                        <td class="border-b border-gray-200 dark:border-slate-600 p-4 flex space-x-2">
                            <a href="{{ route('user.spg_programs.show', $program->id) }}" class="text-blue-500 hover:text-blue-700">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('user.spg_programs.edit', $program->id) }}" class="text-yellow-500 hover:text-yellow-700">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('user.spg_programs.destroy', $program->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
