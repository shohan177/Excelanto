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
        User::create([
            'role_id' => 1,
            'country_id' => 2,
            'name' => 'Super admin',
            'email' => 'sa@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'super-admin',
            'active_status' => 'Approved',
        ]);

        User::create([
            'role_id' => 12,
            'country_id' => 2,
            'name' => 'Bangladesh admin',
            'email' => 'ba@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'bangladeshi-admin',
            'active_status' => 'Approved',
        ]);

        User::create([
            'role_id' => 11,
            'country_id' => 2,
            'name' => 'Recruiting agency',
            'email' => 'rea@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'recruiting-agency',
            'active_status' => 'Approved',
        ]);

        User::create([
            'role_id' => 3,
            'country_id' => 2,
            'name' => 'Welfare sevice centre',
            'email' => 'wsc@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'welfare-service-center-company',
            'active_status' => 'Approved',
        ]);

        User::create([
            'role_id' => 5,
            'country_id' => 2,
            'name' => 'Master One stop service',
            'email' => 'moss@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'master-one-stop-service',
            'active_status' => 'Approved',
        ]);

        User::create([
            'role_id' => 2,
            'country_id' => 2,
            'name' => 'Employer company',
            'email' => 'ec@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'employer-company',
            'active_status' => 'Approved',
        ]);

        User::create([
            'role_id' => 4,
            'country_id' => 2,
            'name' => 'Bangladesh Embassy',
            'email' => 'be@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'bangladeshi-embassy',
            'active_status' => 'Approved',
        ]);

        User::create([
            'role_id' => 14,
            'country_id' => 2,
            'name' => 'Uae Admin',
            'email' => 'uaeadmin@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'uae-admin',
            'active_status' => 'Approved',
        ]);
    }
}
