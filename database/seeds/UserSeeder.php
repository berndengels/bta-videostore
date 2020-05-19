<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::unprepared('LOCK TABLES users WRITE');
        $data = [
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('password'),
            'is_admin'  => 1,
        ];
        DB::table('users')->insertOrIgnore($data);
        DB::unprepared('UNLOCK TABLES');
    }
}
