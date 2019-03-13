<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Type;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BreweriesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(BeersTableSeeder::class);
    }
}
