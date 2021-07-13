<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => 1,
            'name' => 'Super admin',
            'slug' => 'super-admin',
            'status' => 'active'
        ]);

        Role::create([
            'id' => 2,
            'name' => 'Employer company',
            'slug' => 'employer-company',
            'status' => 'active'
        ]);

        Role::create([
            'id' => 3,
            'name' => 'Welfare service center company',
            'slug' => 'welfare-service-center-company',
            'status' => 'active'
        ]);

        Role::create([
            'id' => 4,
            'name' => 'Bangladeshi embassy',
            'slug' => 'bangladeshi-embassy',
            'status' => 'active'
        ]);

        Role::create([
            'id' => 5,
            'name' => 'Master One stop service',
            'slug' => 'master-one-stop-service',
            'status' => 'active'
        ]);

        Role::create([
            'id' => 6,
            'name' => 'One stop service agency',
            'slug' => 'one-stop-service-agency',
            'status' => 'active'
        ]);

        Role::create([
            'id' => 7,
            'name' => 'Medical company',
            'slug' => 'medical-company',
            'status' => 'active'
        ]);

        Role::create([
            'id' => 8,
            'name' => 'Training company',
            'slug' => 'training-company',
            'status' => 'active'
        ]);

        Role::create([
            'id' => 9,
            'name' => 'Travel company',
            'slug' => 'travel-company',
            'status' => 'active'
        ]);

        Role::create([
            'id' => 10,
            'name' => 'Biometric company',
            'slug' => 'biometric-company',
            'status' => 'active'
        ]);

        Role::create([
            'id' => 11,
            'name' => 'Recruiting Agency',
            'slug' => 'recruiting-agency',
            'status' => 'active'
        ]);

        Role::create([
            'id' => 12,
            'name' => 'Bangladeshi admin',
            'slug' => 'bangladeshi-admin',
            'status' => 'active'
        ]);

        Role::create([
            'id' => 13,
            'name' => 'Employer',
            'slug' => 'employer',
            'status' => 'active'
        ]);
    }
}
