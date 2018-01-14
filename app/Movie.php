<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    public function genre() {
        return $this->hasMany('App\Genre');
    }
}
