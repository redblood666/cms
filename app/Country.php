<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //

    public function posts(){
        return $this->hasManyThrough('App\Post', 'App\User');

        //return $this->hasManyThrough('App\Post', 'App\User', 'country_id', 'the_user_id');

    }
}
