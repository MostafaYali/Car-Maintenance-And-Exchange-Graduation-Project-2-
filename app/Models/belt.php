<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class belt extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'belts_type',
        'belts_km_from',
        'belts_km_to',
        
    ];
}
