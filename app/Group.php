<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    public function blogUsers() 
    {
        return $this->belongsToMany(BlogUser::class);
    }
}
