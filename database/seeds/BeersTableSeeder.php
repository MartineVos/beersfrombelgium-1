<?php

use App\Beer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php namespace resolver
        DB::table('beers')->truncate();

        // Eloquent : Mass Assignment
        Beer::create(['name' => 'Duvel','alcohol' => 8.5,'score' => 5]);
        Beer::create(['name' => 'Jupiler','alcohol' => 5.5,'score' => 3]);
        Beer::create(['name' => 'Cristal','alcohol' => 4.5,'score' => 4]);
    }
}
