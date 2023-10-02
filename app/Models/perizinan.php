<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class perizinan extends Model
{
    use HasFactory;

    public $table = 'perizinan';
    protected $guarded = [];

    public function keterangan(): HasOne{
        return $this->hasOne(keterangan::class, 'id', 'keterangan_id');
    }

    public function user(): HasOne{
        return $this->HasOne(User::class);
    }
}
