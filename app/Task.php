<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //    
    protected $fillable = [
        'id',
        'name',
        'user_id',
        'order_id',
        'days',
        'hours',
        'created_at',
        'updated_at',
    ];
}
