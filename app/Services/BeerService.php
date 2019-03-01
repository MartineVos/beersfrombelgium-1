<?php

namespace App\Services;

use App\Beer;

class BeerService {
  public function popular() {
    return Beer::where('score', '>', 3)->latest()->limit(4)->get();
  }
}