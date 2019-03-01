<?php

namespace App\Http\Controllers;

use App\Beer;
use Illuminate\Http\Request;

class BeersController extends Controller
{
    public function index() {
        $beers = Beer::all();

        // 4 bieren die score hoger als 3 hebben
        $popular_beers = Beer::where('score', '>', 3)
                            ->orderBy('id', 'desc')
                            ->limit(4)
                            ->get();

        return view('beers.index', compact('beers', 'popular_beers'));
    }

    public function show($id) {
        $beer = Beer::find($id);
        return view('beers.show', compact('beer'));
    }
}
