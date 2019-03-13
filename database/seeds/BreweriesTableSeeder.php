<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Brewery;

class BreweriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breweries')->truncate();
        
        $brewery = new Brewery();
        $brewery->name = 'Moortgat';
        $brewery->description = 'lfkjsdlkfjsdklfj alskdjf lsdkjf';
        $brewery->save();

        $brewery = new Brewery();
        $brewery->name = 'InBev';
        $brewery->description = 'lfkjsdlkfjsdklfj alskdjf lsdkjf';
        $brewery->save();
    }
}
