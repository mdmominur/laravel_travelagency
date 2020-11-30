<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable =[
        'title',
        'image',
        'post_details'
    ];

    public function get_user(){
        return $this->belongsTo('App\User', 'author');
    }
}
