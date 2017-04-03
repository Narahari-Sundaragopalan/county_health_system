<?php

use Illuminate\Database\Seeder;
use App\Patient;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->delete();
        Patient::create([  'hospital_id' => 1, 'patient_first_name' => 'John', 'patient_last_name' => 'Smith',
            'admit_date' => date('2017-03-12'), 'admit_time' => '23:15:00', 'patient_condition' => 'critical', 'age' => 30,
            'gender' => 'Male', 'date_of_birth' => date('1987-03-12'), 'department' => 'Burn Ward', 'next_of_kin' => 'xyz', 'next_of_kin_contact' => '402-500-0000',
            'next_of_kin_relation' => 'Sister', 'patient_deposition_condition' => 'Critical', 'room_no' => 201, 'patient_injury' => 'Burns',
            'created_at' => date_create(), 'updated_at' => date_create()]);

        Patient::create([  'hospital_id' => 2, 'patient_first_name' => 'Adam', 'patient_last_name' => 'Hayden',
            'admit_date' => date('2017-03-12'), 'admit_time' => '17:30:05', 'patient_condition' => 'critical', 'age' => 25,
            'gender' => 'Male', 'date_of_birth' => date('1991-03-12'), 'department' => 'Burn Ward', 'next_of_kin' => 'xyz', 'next_of_kin_contact' => '402-510-9800',
            'next_of_kin_relation' => 'Brother', 'patient_deposition_condition' => 'Critical', 'room_no' => 122, 'patient_injury' => 'Burns',
            'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}
