<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    // Welke velden mogen we invullen via de "CREATE/UPDATE" functie?
    protected $fillable = ['name', 'alcohol', 'score'];

    // $beer->brewery
    public function brewery() {
        // SELECT * FROM BREWERIES WHERE ID=brewery_id;
        return $this->belongsTo('App\Brewery');
    }

    public function type() {
        return $this->belongsTo('App\Type');
    }

    public function tastes() {
        return $this->belongsToMany('App\Taste');
    }

    public function reviews() {
        return $this->hasMany('App\Review');
    }
}
