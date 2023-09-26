<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['task_classroom'];

    public function task_classroom() {
        return $this->hasMany(TaskClassroom::class);
    }
}
