<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        return view('admin.schedules.index', compact('schedules'));
    }

    public function create()
    {
        return view('admin.schedules.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'venue_name' => 'required|string|max:255',
            'check_in_time' => 'required|date_format:H:i',
            'check_out_time' => 'required|date_format:H:i',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        Schedule::create($request->all());

        return redirect()->route('admin.schedules.index')->with('success', 'Schedule created successfully.');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return redirect()->route('admin.schedules.index')->with('success', 'Schedule deleted successfully.');
    }
}
