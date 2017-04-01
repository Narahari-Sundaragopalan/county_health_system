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
        $currentHospital = $request['hospital_id'];
        $hospital = Hospital::find($currentHospital);
        $department = $request['department'];
        $bed_Type = '';
        if($department == 'Critical Care') {
            $bed_Type = 'critical_care_beds_occupied';
        } else if ($department == 'Burn Ward') {
            $bed_Type = 'burn_ward_beds_occupied';
        } else if ($department == 'Pediatric Unit') {
            $bed_Type = 'pediatric_unit_beds_occupied';
        } else if ($department == 'General Care') {
            $bed_Type = 'general_care_beds_occupied';
        }
        $hospital->increment($bed_Type);
        $hospital->save();
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
     /*   $current_bed_type = '';
        $updated_bed_type = $request['department'];
        $patient = Patient::find($id);
        $currentHospital = $patient->hospital_id;
        $hospital = Hospital::find($currentHospital);
        $department = $patient->department;
        if($department == 'Critical Care') {
            $current_bed_type = 'critical_care_beds_occupied';
        } else if ($department == 'Burn Ward') {
            $current_bed_type = 'burn_ward_beds_occupied';
        } else if ($department == 'Pediatric') {
            $current_bed_type = 'pediatric_unit_beds_occupied';
        } else if ($department == 'General Care') {
            $current_bed_type = 'general_care_beds_occupied';
        }
        while($updated_bed_type != $current_bed_type) {
            //Do names and ids same as column names
            // update those columns for that hospital
            $hospital->decrement($updated_bed_type);
            $hospital->increment($current_bed_type);
            $hospital->save();
        }*/
        $patient->update($request->all());
        return redirect('patients');
    }

    public function destroy($id)
    {
        $currentPatient = Patient::find($id);
        $currentHospital = $currentPatient->hospital_id;
        $hospital = Hospital::find($currentHospital);
        $department = $currentPatient->department;
        if($department == 'Critical Care') {
            //$hospital->critical_care_beds_occupied += 1;
            $hospital->increment('critical_care_beds_occupied');
        } else if ($department == 'Burn Ward') {
            //$hospital->burn_ward_beds_occupied += 1;
            $hospital->increment('burn_ward_beds_occupied');
        } else if ($department == 'Pediatric') {
            //$hospital->pediatric_unit_beds_occupied += 1;
            $hospital->increment('pediatric_unit_beds_occupied');
        } else if ($department == 'General Care') {
           // $hospital->general_care_beds_occupied += 1;
            $hospital->increment('general_care_beds_occupied');
        }
        $hospital->save();
        $currentPatient->delete();
        return redirect('patients');
    }

}
