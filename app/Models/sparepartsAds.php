<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sparepartsAds extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_name',
        'type',
        'brand',
        'condition',
        'location',
        'image',
        'price',
    ];
}
