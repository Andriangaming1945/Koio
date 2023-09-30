<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _User extends Model
{
    use HasFactory;

    public function perizinan(){
        return $this->hasMany(perizinan::class);
    }
}
