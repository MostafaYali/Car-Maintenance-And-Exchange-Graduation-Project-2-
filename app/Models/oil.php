<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class oil extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'brand_oil',
        'Oilviscosity',
        'oil_km',
        'oil_price',
        
    ];


    
}
