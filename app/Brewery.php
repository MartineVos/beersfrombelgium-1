<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brewery extends Model
{
    // $brewery->beers == $brewery->beers()->get();
    // $brewery->beers()->where('score', '>', 3)->limit(2)->get();
    public function beers() {
        // SELECT * FROM BEERS WHERE brewery_id=GET_ID
        return $this->hasMany('App\Beer');
    }
}
