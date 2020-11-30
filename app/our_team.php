<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class our_team extends Model
{
    protected $fillable = [
        'title',
        'role',
        'image',
        'facebook',
        'twitter',
        'instagram',
        'mark',
    ];
}
