<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = base_path() . '/database/dumps/authors_data.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('authors data seeded!');
    }
}
