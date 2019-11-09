<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogUser extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }
}
