<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Illuminate\Contracts\Database\Eloquent;

class DatabaseSeeder extends Seeder
{
    private $_seeds = [
        UserSeeder::class,
        AuthorSeeder::class,
        MovieSeeder::class,
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->call($this->_seeds);
    }
}
