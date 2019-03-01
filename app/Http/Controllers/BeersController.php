<?php

namespace App\Http\Controllers;

use App\Beer;
use Illuminate\Http\Request;

class BeersController extends Controller
{
    public function index() {
        $beers = Beer::all();
        return view('beers.index', compact('beers', 'popular_beers'));
    }

    public function show($id) {
        $beer = Beer::find($id);
        return view('beers.show', compact('beer'));
    }
}
