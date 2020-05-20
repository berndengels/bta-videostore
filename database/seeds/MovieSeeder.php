<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = base_path() . '/database/dumps/movies_data.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('movies data seeded!');
    }
}
