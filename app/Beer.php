<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    // Welke velden mogen we invullen via de "CREATE/UPDATE" functie?
    protected $fillable = ['name', 'alcohol', 'score'];
}
