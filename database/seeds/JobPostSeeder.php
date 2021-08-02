<?php

use App\JobPost;
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
        for ($i = 0; $i < 10; $i++) {
            DB::table('job_posts')->insert([
                'job_category_id' => rand(5, 12),
                'user_id' => 6,
                'company_id' => 6,
                'employment_type' => 'Full Time',
                'gender'  => 'Male only',
                'age_limit'  => rand(20, 50),
                'salary'  => rand(5000, 50000),
                'job_location'  => 'Dhaka Bangladesh',
                'job_vacancy'  => rand(50, 99),
                'end_date'  => now(),
                'demand_letter'  => Str::random(10),
                'selected_wsc'  => rand(1, 10),
                'appointment_date'  => now(),
                'appointment_time'  => now(),
                // 'rejection_reason'  => Str::random(10),
                'status'  => 'Approved',
                'bd_embasy_status' => 'Approved',
                'created_at' => Carbon::now()
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            $job_post_id = JobPost::insertGetId([
                'job_category_id' => rand(5, 12),
                'user_id' => 6,
                'company_id' => 6,
                'employment_type' => Str::random(10),
                'gender'  => 'Male only',
                'age_limit'  => rand(20, 50),
                'salary'  => rand(5000, 50000),
                'job_location'  => Str::random(10),
                'job_vacancy'  => rand(20, 50),
                'end_date'  => now(),
                'demand_letter'  => Str::random(10),
                'selected_wsc'  => rand(1, 10),
                'appointment_date'  => now(),
                'appointment_time'  => now(),
                // 'rejection_reason'  => Str::random(10),
                'status'  => 'Applied',
                'bd_embasy_status' => 'Approved',
                'created_at' => Carbon::now()
            ]);

            $job_post = JobPost::findOrFail($job_post_id);

            DB::table('applied_jobs')->insert([
                'job_post_id' => $job_post->id,
                'company_id' => $job_post->company_id,
                'applier_id' => 3,
                'selected_medical_id' => rand(1, 10),
                'selected_training_id' => rand(1, 10),
                'job_vacancy' => $job_post->job_vacancy,
                'applied_vacancy' => $job_post->job_vacancy - 2 ,
                // 'approved_vacancy' => rand(1, 10),
                // 'remarks'  => Str::random(10),
                'applier_agency_name'  => Str::random(10),
                'datetime'  => now(),
                'status' => 'Applied',
                // 'approved_by' => 'Bangladesh Embassy',
                // 'approved_date' => now(),
                // 'approved_company_name'  => Str::random(10),
                // 'approved_id' => '7',
                // 'approved_remarks'  => Str::random(10),
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            $job_post_id = JobPost::insertGetId([
                'job_category_id' => rand(5, 12),
                'user_id' => 6,
                'company_id' => 6,
                'employment_type' => Str::random(10),
                'gender'  => 'Male only',
                'age_limit'  => rand(20, 50),
                'salary'  => rand(5000, 50000),
                'job_location'  => Str::random(10),
                'job_vacancy'  => rand(20, 50),
                'end_date'  => now(),
                'demand_letter'  => Str::random(10),
                'selected_wsc'  => rand(1, 10),
                'appointment_date'  => now(),
                'appointment_time'  => now(),
                // 'rejection_reason'  => Str::random(10),
                'status'  => 'Applied',
                'bd_embasy_status' => 'Approved',
                'created_at' => Carbon::now()
            ]);

            $job_post = JobPost::findOrFail($job_post_id);

            DB::table('applied_jobs')->insert([
                'job_post_id' => $job_post->id,
                'company_id' => $job_post->company_id,
                'applier_id' => 3,
                'selected_medical_id' => rand(1, 10),
                'selected_training_id' => rand(1, 10),
                'job_vacancy' => $job_post->job_vacancy,
                'applied_vacancy' => $job_post->job_vacancy - 2 ,
                'approved_vacancy' => $job_post->job_vacancy - 4,
                'remarks'  => Str::random(10),
                'applier_agency_name'  => Str::random(10),
                'datetime'  => now(),
                'status' => 'Approved',
                'approved_by' => 'Bangladesh Embassy',
                'approved_date' => now(),
                'approved_company_name'  => Str::random(10),
                'approved_id' => '7',
                'approved_remarks'  => Str::random(10),
            ]);
        }
    }
}
