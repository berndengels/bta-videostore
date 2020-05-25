<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieAddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared('UPDATE movies SET created_by=1;');
        $this->command->info('movies data seeded!');
    }
}
