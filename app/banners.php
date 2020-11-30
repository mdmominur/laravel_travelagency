<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banners extends Model
{
    function getPage(){
        return $this->belongsTo('App\pages', 'bannerPage');
    }
    protected $fillable = [
        'title',
        'caption',
        'bannerImg',
    ];
}
