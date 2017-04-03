<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Validator;
use Illuminate\Support\Facades\Input;

use App\Patient;

use App\Hospital;

use App\Nurse;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();

        if (Auth::check() && Auth::user()->hasRole('nurse')) {
            $current_user_id = Auth::user()->id;
            $current_hospital_id = Nurse::where('user_id', $current_user_id)->value('hospital_id');
            $patients = Patient::where('hospital_id', $current_hospital_id)->get();
        }

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
        $this->validate($request, [
            'patient_first_name' => 'bail|required|max:255',
            'patient_last_name' => 'required|max:255',
            'age' => 'numeric',
            'next_of_kin_contact' => 'required|regex:/([0-9]{3}-[0-9]{3}-[0-9]{4})/',
            'room_no' => 'required|numeric',
        ]);

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

        if (Auth::check() && Auth::user()->hasRole('nurse')) {
            $current_user_id = Auth::user()->id;
            $current_hospital_id = Nurse::where('user_id', $current_user_id)->value('hospital_id');
            $patient->hospital_id = $current_hospital_id;
        }

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
        $current_bed_type = '';
        $updated_bed_type = '';

        $this->validate($request, [
            'patient_first_name' => 'bail|required|max:255',
            'patient_last_name' => 'required|max:255',
            'age' => 'numeric',
            'next_of_kin_contact' => 'required|regex:/([0-9]{3}-[0-9]{3}-[0-9]{4})/',
            'room_no' => 'required|numeric',
        ]);

        $currentHospital = $patient->hospital_id;
        $hospital = Hospital::find($currentHospital);
        $department = $patient->department;

        if($department != $request['department']) {
            if ($department == 'Critical Care') {
                $current_bed_type = 'critical_care_beds_occupied';
            } else if ($department == 'Burn Ward') {
                $current_bed_type = 'burn_ward_beds_occupied';
            } else if ($department == 'Pediatric') {
                $current_bed_type = 'pediatric_unit_beds_occupied';
            } else if ($department == 'General Care') {
                $current_bed_type = 'general_care_beds_occupied';
            }

            if ($request['department'] == 'Critical Care') {
                $updated_bed_type = 'critical_care_beds_occupied';
            } else if ($request['department'] == 'Burn Ward') {
                $updated_bed_type = 'burn_ward_beds_occupied';
            } else if ($request['department'] == 'Pediatric') {
                $updated_bed_type = 'pediatric_unit_beds_occupied';
            } else if ($request['department'] == 'General Care') {
                $updated_bed_type = 'general_care_beds_occupied';
            }

            $hospital->increment($updated_bed_type);
            $hospital->decrement($current_bed_type);
        }
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
            $hospital->decrement('critical_care_beds_occupied');
        } else if ($department == 'Burn Ward') {
            $hospital->decrement('burn_ward_beds_occupied');
        } else if ($department == 'Pediatric') {
            $hospital->decrement('pediatric_unit_beds_occupied');
        } else if ($department == 'General Care') {
            $hospital->decrement('general_care_beds_occupied');
        }
        $currentPatient->delete();
        return redirect('patients');
    }

}
