<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class carInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'man_name',
        'model',
        'year',
        'category',
        'car_name_arabic',
        
    ];
}
