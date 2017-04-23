<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['month', 'emergency_name', 'emergency_description', 'emergency_start_date', 'emergency_end_date', 'hospital_name', 'bed_count', 'beds_available'];
}
