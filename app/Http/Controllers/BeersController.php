<?php

namespace App\Http\Controllers;

use App\Beer;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeersController extends Controller
{
    public function index() {
        $beers = Beer::all();
        $popular_beers = Beer::where('score', '>', 3)->get();
        return view('beers.index', compact('beers', 'popular_beers'));
    }

    public function show($id) {
        $beer = Beer::find($id);
        return view('beers.show', compact('beer'));
    }

    public function create() {
        // view tonen met formulier
        $beer = new Beer;
        return view('beers.create', compact('beer'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'alcohol' => 'required|numeric',
            'type' => 'filled',
            'brewery' => 'filled'
        ]);

        // formulier data saven in databank
        $beer = new Beer;
        $beer->name = $request->name;
        $beer->alcohol = $request->alcohol;
        $beer->score = 3;
        $beer->type_id = $request->type;
        $beer->brewery_id = $request->brewery;
        $beer->tastes()->sync($request->tastes);
        $beer->save();
        // terug naar overzicht
        return redirect()->route('home');
    }

    public function edit($id) {
        $beer = Beer::find($id);
        return view('beers.edit', compact('beer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'alcohol' => 'required|numeric',
            'type' => 'filled',
            'brewery' => 'filled',
        ]);
        // formulier data saven in databank
        $beer = Beer::find($id);
        $beer->name = $request->name;
        $beer->alcohol = $request->alcohol;
        $beer->type_id = $request->type;
        $beer->brewery_id = $request->brewery;
        // $beer->score = 3;
        $beer->tastes()->sync($request->tastes);
        $beer->save();
        // terug naar overzicht
        return redirect()->route('home');
    }

    public function delete($id) {
        $beer = Beer::find($id);
        $beer->delete();
        return redirect()->route('home');
    }

    public function add_comment($id, Request $request) {
        // validate.....

        $review = new Review;
        $review->beer_id = $id;
        $review->user_id = Auth::id();
        $review->text = $request->review;
        $review->save();

        return redirect()->route('beers.show', $id);
    }
}
