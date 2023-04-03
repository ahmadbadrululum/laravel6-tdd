<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    // setiap comment milik user itu sendiri
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // setiap 1 comentar dia milik blog itu sendiri
    public function blog()
    {
        return $this->belongsTo('App\Models\Blog');
    }
}
