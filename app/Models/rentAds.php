<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class rentAds extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_name',
        'brand',
        'car_model',
        'body_type',
        'transmission_type',
        'year',
        'engine_capacity',
        'fuel_type',
        'location',
        'color',
        'image',
        'price',
         'rental_option',
        'rental_period',
    ];

}
