<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class maintenance extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_car',
        'model_car',
        'km_from',
        'km_to',
        'oil',
        'oil_km',
        'battery',
        'tire',
        'tire_model',
        'battery_time',
        'asisstan',
        'belts',
        'belts_km_from',
        'belts_km_to',
        'car_year',
        
    ];
}
