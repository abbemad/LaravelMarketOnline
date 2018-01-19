<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'id',
        'body',
        'url',
        'user_id',
        'commentable_id',
        'commentable_type',
        'created_at',
        'updated_at'
    ];
}
