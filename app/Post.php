<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function blogUser()
    {
        return $this->belongsTo(BlogUser::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
