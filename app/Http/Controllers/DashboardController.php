<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\SPGProgram;

class DashboardController extends Controller
{
    public function index()
    {
        $scheduleCount = Schedule::count();
        $spgProgramCount = SPGProgram::count();

        $chartData = [
            'labels' => ['Schedules', 'SPG Programs'],
            'datasets' => [
                [
                    'data' => [$scheduleCount, $spgProgramCount],
                    'backgroundColor' => ['#4CAF50', '#FF6384'],
                ],
            ],
        ];

        return view('dashboard', compact('scheduleCount', 'spgProgramCount', 'chartData'));
    }
}