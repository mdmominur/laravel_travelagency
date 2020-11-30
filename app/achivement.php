<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class achivement extends Model
{
    protected $fillable = [
        'title1',
        'title2',
        'description',
        'opt1',
        'opt1_value',
        'opt2',
        'opt2_value',
        'opt3',
        'opt3_value',
        'image',
    ];
}
