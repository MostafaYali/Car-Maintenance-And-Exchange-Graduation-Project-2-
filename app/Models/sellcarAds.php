<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sellcarAds extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_name',
        'ad_type',
        'brand',
        'car_model',
        'body_type',
        'transmission_type',
        'year',
        'engine_capacity',
        'fuel_type',
        'condition',
        'location',
        'color',
        'image',
        'price',
        'payment_method',
    ];
}
