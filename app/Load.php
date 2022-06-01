<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Load extends Model
{
    //
    protected $fillable = [
        'pickup_date',
        'dropoff_date',
        'dropoff_location',
        'pickup_location',
        'phone_number',
        'email',
        'commodity',
        'truck_type',
        'freezer'
    ];
}

