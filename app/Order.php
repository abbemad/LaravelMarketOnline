<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'id',
        'name',
        'user_id',
        'product_id',
        'days',
        'created_at',
        'updated_at',
    ];
}
