<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogComments extends Model
{
    protected $fillable = [
        'status'
    ];

    function get_blog(){
        return $this->belongsTo('App\blog', 'blogSlug');
    }
}
