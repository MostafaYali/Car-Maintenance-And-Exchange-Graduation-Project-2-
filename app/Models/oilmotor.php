<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class oilmotor extends Model
{
    use SoftDeletes;

    
    protected $fillable = [
        'brand',
        'model',
        'viscosity',
        'oil_km',
        
        
    ];
}
