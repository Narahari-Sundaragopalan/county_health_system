<?php

namespace App\Http\Controllers;

use App\Emergency;
use App\Hospital;
use App\User;
use Illuminate\Http\Request;
use Log;
use Auth;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Validator;
use Illuminate\Support\Facades\Input;

use App\Nurse;
use App\Patient;

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

    public function create()
    {

        Log::info('EmergencyController.create: ');
        return view('emergencies.create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'emergency_name' => 'bail|required|max:50',
            'emergency_start_date' => 'required|date|after:yesterday',
            'emergency_end_date' => 'required|date|after:emergency_start_date',
        ]);

        $emergency= new Emergency($request->all());
        $emergency->save();
        return redirect('emergencies');
    }

    public function edit($id)
    {
        $emergency = Emergency::find($id);
        Log::info('EmergencyController.edit: '.$emergency->id.'|'.$emergency->emergency_name);
        $this->viewData['emergency'] = $emergency;
        $this->viewData['heading'] = "Edit Emergency: ". $emergency->emergency_name;
        return view('emergencies.edit', $this->viewData);
    }

    public function update($id,Request $request)
    {
        $this->validate($request, [
            'emergency_name' => 'bail|required|max:50',
            'emergency_description' => 'bail|max:150',
            'emergency_start_date' => 'required|date|after:yesterday',
            'emergency_end_date' => 'required|date|after:emergency_start_date',
        ]);

        $emergency= new Emergency($request->all());
        $emergency=Emergency::find($id);
        $emergency->update($request->all());
        return redirect('emergencies');
    }

    public function destroy($id)
    {
        Emergency::find($id)->delete();
        return redirect('emergencies');
    }
}
