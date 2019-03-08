<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Brewery;

class BrewerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breweries')->truncate();
        
    }
}
