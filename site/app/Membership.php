<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    //
    protected $fillable = [
        'name',
        'price',
        'description',
        'features',
    ];
}
