<?php

namespace App\Http\Controllers;

use App\Emergency;
use App\Patient;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;

use App\Report;

use App\Hospital;

class ReportDemoController extends Controller
{
    public function importExport()
    {
        return view('importExport');
    }
    public function downloadExcel(Request $request, $type)
    {
        $report_type = $request['report_type'];
        if($report_type == 'Hospital') {
            $data = Hospital::get()->toArray();
            return Excel::create('Report on Hospitals', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
        }
        elseif ($report_type == 'Emergency') {
            $data = Emergency::get()->toArray();
            return Excel::create('Report on Emergency', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
        }
        elseif ($report_type == 'Bed Status') {
            $data = Report::get()->toArray();
            return Excel::create('Report on Bed Status', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
        }
        elseif ($report_type == 'Patients') {
            $data = Patient::get()->toArray();
            return Excel::create('Report on Patients', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
        }
    }
    public function importExcel()
    {
        if(Input::hasFile('import_file')){
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $insert[] = ['month' => $value->month, 'emergency_name' => $value->emergency_name, 'emergency_description' =>
                    $value->emergency_description, 'emergency_start_date' => $value->emergency_start_date, 'emergency_end_date' =>
                    $value->emergency_end_date, 'hospital_name' => $value->hospital_name, 'bed_count' => $value->bed_count,
                    'beds_available' => $value->beds_available];
                }
                if(!empty($insert)){
                    DB::table('reports')->insert($insert);
                    return view('fileImportSuccess');
                }
            }
        }
        return back();
    }

    public function generateBar()
    {
        return view('generateBar');
    }

    public function generate()
    {
        return view('generate');
    }

    public function generateBedBar()
    {
        return view('generateBedBar');
    }
}
