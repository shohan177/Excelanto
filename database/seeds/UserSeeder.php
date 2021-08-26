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
            'company_name' => 'Bangladesh admin',
            'email' => 'ba@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'bangladeshi-admin',
            'active_status' => 'Approved',
        ]);

        User::create([
            'role_id' => 9,
            'country_id' => 2,
            'name' => 'Travel Agency',
            'company_name' => 'Travel Agency',
            'email' => 'travel@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'travel-agency',
            'active_status' => 'Approved',
        ]);
        User::create([
            'role_id' => 10,
            'country_id' => 2,
            'name' => 'Biometric Agency',
            'company_name' => 'Biometric Agency',
            'email' => 'bio@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'biometric-agency',
            'active_status' => 'Approved',
        ]);

        User::create([
            'role_id' => 11,
            'country_id' => 2,
            'name' => 'Recruiting agency',
            'company_name' => 'Recruiting agency',
            'email' => 'rea@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'recruiting-agency',
            'active_status' => 'Approved',
        ]);

        User::create([
            'role_id' => 3,
            'country_id' => 2,
            'name' => 'Welfare sevice centre',
            'company_name' => 'Welfare sevice centre',
            'email' => 'wsc@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'welfare-service-center-company',
            'active_status' => 'Approved',
        ]);

        User::create([
            'role_id' => 5,
            'country_id' => 2,
            'name' => 'Master One stop service',
            'company_name' => 'Master One stop service',
            'email' => 'moss@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'master-one-stop-service',
            'active_status' => 'Approved',
        ]);

        User::create([
            'role_id' => 2,
            'country_id' => 2,
            'name' => 'Employer company',
            'company_name' => 'Employer company',
            'email' => 'ec@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'employer-company',
            'active_status' => 'Approved',
        ]);

        User::create([
            'role_id' => 4,
            'country_id' => 2,
            'name' => 'Bangladesh Embassy',
            'company_name' => 'Bangladesh Embassy',
            'email' => 'be@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'bangladeshi-embassy',
            'active_status' => 'Approved',
        ]);

        User::create([
            'role_id' => 14,
            'country_id' => 2,
            'name' => 'Uae Admin',
            'company_name' => 'Uae Admin',
            'email' => 'uaeadmin@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'uae-admin',
            'active_status' => 'Approved',
        ]);
        User::create([
            'role_id' => 6,
            'country_id' => 2,
            'name' => 'Child One Stop Service',
            'company_name' => 'Child One Stop Service',
            'email' => 'coss@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'child-one-stop-service',
            'active_status' => 'Approved',
        ]);
        User::create([
            'role_id' => 7,
            'country_id' => 2,
            'childosc_id'=>11,
            'name' => 'Medical Agency',
            'company_name' => 'Medical Agency',
            'email' => 'ma@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'medical-agency',
            'active_status' => 'Approved',
        ]);

        User::create([
            'role_id' => 8,
            'country_id' => 2,
            'childosc_id'=>11,
            'name' => 'Training Agency',
            'company_name' => 'Training Agency',
            'email' => 'ta@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'training-agency',
            'active_status' => 'Approved',
        ]);
        User::create([
            'role_id' => 15,
            'country_id' => 2,
            'name' => 'Uae Embassy',
            'company_name' => 'Uae Embassy',
            'email' => 'ue@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'uae-embassy',
            'active_status' => 'Approved',
        ]);
        User::create([
            'role_id' => 16,
            'country_id' => 2,
            'name' => 'Candidate',
            'company_name' => 'Candidate',
            'email' => 'candidate@gmail.com',
            'password' => Hash::make('12345'),
            'user_type' => 'candidate',
            'active_status' => 'Approved',
        ]);
    }
}
