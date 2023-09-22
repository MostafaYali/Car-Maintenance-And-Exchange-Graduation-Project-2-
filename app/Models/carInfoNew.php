<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class carInfoNew extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'car_image',
        'man_photo',
        'car_man',
        'car_model',
        'car_year',
        'car_cat',
        'car_model_arabic',
        'class',
        'warranty',
        'warrantykm',
        'cc',
        'hp',
        'transmissiontype',
        'price',
    ];

    
}
