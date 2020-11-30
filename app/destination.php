<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
    protected $fillable = [
        'title',
        'price',
        'day',
        'country',
        'city',
        'popular',
        'description',
        'tour_details',
    ];
}
