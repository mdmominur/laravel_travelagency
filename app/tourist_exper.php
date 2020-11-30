<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tourist_exper extends Model
{
    protected $fillable = [
        'title',
        'description',
        'role',
        'image',
    ];
}
