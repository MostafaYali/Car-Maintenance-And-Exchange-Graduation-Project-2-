<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class battery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'brand_battery',
        'type_battery',
        'battery_price',
        'livetime',
        
    ];
}
