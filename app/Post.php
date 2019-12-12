<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'image',
    ];

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
