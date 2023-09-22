<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tire extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'brand_tire',
        'type',
        'tire_km',
        'price',
        
    ];

}
