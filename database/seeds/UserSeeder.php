<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            DB::table('users')->truncate();
            DB::table('users')->insert([
                'name'      => 'admin',
                'email'     => 'admin@gmail.com',
                'password'  => Hash::make('password'),
            ]);
            $this->command->info('User table seeded!');
        } catch(Exception $e) {
            $this->command->error('seed error: '. $e->getMessage());
        }
    }
}
