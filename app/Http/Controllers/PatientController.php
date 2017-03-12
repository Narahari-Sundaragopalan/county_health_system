<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Patient;

use App\Hospital;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index',compact('patients'));
    }

    public function show($id)
    {
        $patients = Patient::findOrFail($id);
        return view('patients.show',compact('patients'));
    }
}
