<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'hospital_id', 'patient_first_name', 'patient_last_name', 'admit_date', 'admit_time', 'patient_condition', 'age', 'gender',
        'date_of_birth', 'department', 'next_of_kin', 'next_of_kin_contact', 'next_of_kin_relation', 'patient_deposition_condition',
        'room_no', 'patient_injury'
    ];

    public function hospital() {
        return $this->belongsTo('App\Hospital');
    }
}
