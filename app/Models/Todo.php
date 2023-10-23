<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'title',
        'isCompleted',
        "time"
    ];
}
