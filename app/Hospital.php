<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'hospital_name', 'address1', 'address2', 'contact', 'zipcode', 'no_of_beds', 'beds_occupied'
    ];

    public function emergency()
    {
        return $this->hasMany('App\Emergency');
    }
}
