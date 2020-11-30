<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genarel_setting extends Model
{
    protected $fillable = [
        'site_title',
        'logo',
        'title1',
        'title2',
        'description',
        'image',
        'address',
        'email',
        'phone',
    ];
}
