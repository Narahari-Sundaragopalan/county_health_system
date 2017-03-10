<?php

namespace App\Http\Controllers;

use App\Emergency;
use App\Hospital;
use Illuminate\Http\Request;
use Log;

use App\Http\Requests;

class EmergencyController extends Controller
{
    public function index()
    {
        Log::info('EmergencyController.index: ');
        $emergencies = Emergency::all();

        return view('emergencies.index', compact('emergencies'));
    }

    public function show($id)
    {
        Log::info('EmergencyController.show: ');
        $current_emergency = Emergency::findOrFail($id);
        $emergency_name = $current_emergency->emergency_name;
        $hospitals = Hospital::all();

        return view ('emergencies.show', compact('hospitals', 'emergency_name'));
    }
}
