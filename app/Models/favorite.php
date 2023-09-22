<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class favorite extends Model
{
    use SoftDeletes;

    
    protected $fillable = [
        'username',
        'ad_username',
        'model',
        'price',
        'brand',
        'type',
        'image',
    ];
}
