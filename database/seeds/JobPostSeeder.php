<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class JobPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            DB::table('job_posts')->insert([
                'job_category_id' => rand(5, 12),
                'user_id' => rand(1, 10),
                'company_id' => rand(1, 10),
                'employment_type' => Str::random(10),
                'gender'  => 'Male only',
                'age_limit'  => rand(20,50),
                'salary'  => rand(5000,50000),
                'job_location'  => Str::random(10),
                'job_vacancy'  => rand(50, 99),
                'end_date'  => now(),
                'demand_letter'  => Str::random(10),
                'selected_wsc'  => rand(1,10),
                'appointment_date'  => now(),
                'appointment_time'  => now(),
                // 'rejection_reason'  => Str::random(10),
                'status'  => 'Approved',
                'bd_embasy_status' => 'Approved',
                'created_at' => Carbon::now()
           ]);
       }
    }
}
