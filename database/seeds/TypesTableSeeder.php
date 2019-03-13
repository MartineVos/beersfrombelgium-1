<?php

use App\Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->truncate();
        $type = new Type;
        $type->name = 'High Fermentation';
        $type->save();

        $type = new Type;
        $type->name = 'Trappist';
        $type->save();

        $type = new Type;
        $type->name = 'Regular';
        $type->save();
    }
}
