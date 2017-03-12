<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'hospital_name', 'address1', 'address2', 'contact', 'zipcode', 'critical_care_beds', 'critical_care_beds_occupied',
        'burn_ward_beds', 'burn_ward_beds_occupied', 'pediatric_unit_beds', 'pediatric_unit_beds_occupied', 'general_care_beds',
        'general_care_beds_occupied'
    ];

    public function emergency()
    {
        return $this->hasMany('App\Emergency');
    }
}
