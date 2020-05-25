<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Illuminate\Contracts\Database\Eloquent;

class DatabaseSeeder extends Seeder
{
    private $_seeds = [
//        AuthorSeeder::class,
//        MovieSeeder::class,
//        UserSeeder::class,
        MovieAddUserSeeder::class,
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call($this->_seeds);
    }
}
