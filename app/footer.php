<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class footer extends Model
{
    protected $fillable = [
        'copyright',
        'instagram',
        'facebook',
        'twitter',
        'whatsapp',
    ];
}
