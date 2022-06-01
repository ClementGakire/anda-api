<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    protected $fillable = [
        'category',
        'plateNo',
        'weight',
        'height',
        'image',
        'client_id'
    ];
}
