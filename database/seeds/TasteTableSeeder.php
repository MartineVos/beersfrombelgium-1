<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Taste;

class TasteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tastes')->truncate();
        DB::table('beer_taste')->truncate();

        $taste = new Taste;
        $taste->name = 'Splash of lemon';
        $taste->save();

        $taste = new Taste;
        $taste->name = 'Nutty flavour';
        $taste->save();

        $taste = new Taste;
        $taste->name = 'Traces of almond';
        $taste->save();
    }
}
