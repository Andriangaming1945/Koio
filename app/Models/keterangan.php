<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class keterangan extends Model
{
    use HasFactory;

    public $table = 'keterangan';

    protected $guarded = [];

    public function perizinan(): HasOne{
        return $this->hasOne(perizinan::class, 'id', 'keterangan_id');
    }
}
