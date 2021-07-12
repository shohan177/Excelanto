<?php

use Illuminate\Database\Seeder;
use App\User;
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
        $user = new User();
        $user->name = 'Recruiting Agency';
        $user->email = 'ra@gmail.com';
        $user->country_id = 3;
        $user->user_type = 11;
        $user->role_id = 11;
        $user->active_status = "New";
        $user->password = Hash::make('12345');
        $user->save();

        $user = new User();
        $user->name = 'One Stop Service';
        $user->email = 'oss@gmail.com';
        $user->country_id = 3;
        $user->user_type = 13;
        $user->role_id = 13;
        $user->active_status = "New";
        $user->password = Hash::make('12345');
        $user->save();
    }
}
