<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    protected $fillable = [
        'emergency_name', 'emergency_description', 'emergency_start_date', 'emergency_end_date'
    ];

    protected $table = 'emergency';

    public function hospital()
    {
        return $this->belongsTo('App\Hospital');
    }
}
