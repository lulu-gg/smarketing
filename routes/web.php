<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\User\ScheduleController as UserScheduleController;
use App\Http\Controllers\User\SPGProgramController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return 'Admin Page';
    });
    Route::resource('schedules', ScheduleController::class);
});

Route::middleware(['auth', 'role:super user'])->group(function () {
    Route::get('/super-user', function () {
        return 'Super User Page';
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('user')->name('user.')->group(function () {
    Route::get('schedules', [UserScheduleController::class, 'index'])->name('schedules.index');
    Route::post('schedules/{schedule}/upload', [UserScheduleController::class, 'upload'])->name('schedules.upload');
});
Route::prefix('user')->name('user.')->group(function () {
    Route::resource('spg_programs', SPGProgramController::class);
});
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
