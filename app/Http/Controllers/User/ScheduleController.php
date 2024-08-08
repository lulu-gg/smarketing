<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        return view('user.schedules.index', compact('schedules'));
    }

    public function upload(Request $request, Schedule $schedule)
    {
        Log::info('Upload request received:', $request->all());

        $request->validate([
            'check_in_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'check_out_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [];

        if ($request->hasFile('check_in_image')) {
            $checkInPath = $request->file('check_in_image')->store('check_in_images', 'public');
            $data['check_in_image'] = $checkInPath;
            $data['check_in_uploaded_at'] = now();
            Log::info('Check-In Image Path:', ['path' => $checkInPath]);
        }

        if ($request->hasFile('check_out_image')) {
            $checkOutPath = $request->file('check_out_image')->store('check_out_images', 'public');
            $data['check_out_image'] = $checkOutPath;
            $data['check_out_uploaded_at'] = now();
            Log::info('Check-Out Image Path:', ['path' => $checkOutPath]);
        }

        $schedule->update($data);

        Log::info('Schedule updated successfully:', $schedule->toArray());

        return redirect()->route('user.schedules.index')->with('success', 'Images uploaded successfully.');
    }
}
