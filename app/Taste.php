<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taste extends Model
{
    public function beers() {
        return $this->belongsToMany('App\Beer');
    }
}
