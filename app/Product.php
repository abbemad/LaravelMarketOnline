<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'id',
        'name',
        'description',
        'stock',
        'price',
        'amount',
        'user_id',
    ];

    
}
