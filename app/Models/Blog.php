<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // setiap blog milik user itu sendiri
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // setiap blog memiliki banyak comment
    public function comments()
    {
        return $this->hasMany('App\Models\BlogComment');
    }
}
