<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oildata extends Model
{
    use HasFactory;

    public function useraverage()
    {
        return $this->hasOne(users::class, 'id' , 'user_id');
    }
}
