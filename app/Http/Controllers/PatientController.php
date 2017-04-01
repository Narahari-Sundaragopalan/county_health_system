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
        $patient = Patient::findOrFail($id);
        return view('patients.show',compact('patient'));
    }

    public function create()
    {
        $hospitals = Hospital::lists('hospital_name', 'id');
        return view('patients.create', compact('hospitals'));
    }

    /**
     * Store a newly added patient.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $patient = new Patient($request->all());
        $patient->save();
        return redirect('patients');
    }

    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('patients.edit',compact('patient'));
    }

    public function update($id,Request $request)
    {
        //
        $patient = new Patient($request->all());
        $patient = Patient::find($id);
        $patient->update($request->all());
        return redirect('patients');
    }
}
