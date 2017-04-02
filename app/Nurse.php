<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    protected $fillable = [
        'hospital_id', 'user_id', 'nurse_first_name', 'nurse_last_name', 'age', 'gender',
        'date_of_birth', 'department'
    ];

    public function hospital() {
        return $this->belongsTo('App\Hospital');
    }
}
