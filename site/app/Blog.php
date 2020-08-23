<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = [
        'image',
        'title',
        'synopsis',
        'user_id',
    ];
}
