<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class assistan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'asisstan_types',
        
        
    ];
}
