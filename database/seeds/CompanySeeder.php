<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            Company::create([
                'user_id' => $i+1,
                'user_name' => 'kamrulGroup'.$i,
                'company_name' => 'kamrul Group '.$i,
                'company_email' => 'company'.$i.'@gmail.com',
                'status' => 'Active',
           ]);
       }
    }
}
