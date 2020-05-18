<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::unguard();
        $user = User::whereName('admin')->first() ?? new User();
        $user->name     = 'admin';
        $user->email    = 'admin@gmail.com';
        $user->password = Hash::make('password');
        $user->is_admin = 1;
        $user->saveOrFail();
        $this->command->info('User table seeded!');
    }
}
