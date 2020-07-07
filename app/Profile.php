<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'slug', 'user_is', 'avatar', 'cover', 'university'
    ];

    // public function user()
    // {
    //     return $this->belongsTo('App/User');
    // }
}
