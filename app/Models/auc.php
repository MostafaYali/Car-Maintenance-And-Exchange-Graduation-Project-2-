<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auc extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasOne(users::class, 'id' , 'user_id');
    }
}
