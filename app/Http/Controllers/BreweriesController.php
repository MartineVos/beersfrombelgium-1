<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brewery;

class BreweriesController extends Controller
{
    public function index() 
    {
        $breweries = Brewery::all();
        return view('breweries.index', compact('breweries'));
    }

    public function show($id)
    {
        $brewery = Brewery::find($id);
        return view('breweries.show', compact('brewery'));
    }

    public function create()
    {
        $brewery = new Brewery;
        return view('breweries.create', compact('brewery')); 
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required', 'description' => 'required']);

        $brewery = new Brewery;
        $brewery->name = $request->name;
        $brewery->description = $request->description;
        $brewery->save();

        return redirect()->route('breweries.index');
    }

    public function edit($id)
    {
        $brewery = Brewery::find($id);
        return view('breweries.edit', compact('brewery')); 
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required', 'description' => 'required']);

        $brewery = Brewery::find($id);
        $brewery->name = $request->name;
        $brewery->description = $request->description;
        $brewery->save();

        return redirect()->route('breweries.index');
    }

    public function delete($id) {
        $beer = Brewery::find($id);
        return view('breweries.delete', compact('beer'));
    }

    public function destroy($id) {
        $beer = Brewery::find($id);
        $beer->delete();
        return redirect()->route('breweries.index');
    }
}
