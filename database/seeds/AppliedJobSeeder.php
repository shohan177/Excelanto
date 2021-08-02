<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AppliedJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    //     for ($i=0; $i < 10; $i++) {
    //         DB::table('applied_jobs')->insert([
    //             'job_post_id' => rand(1, 10),
    //             'company_id' => rand(1, 10),
    //             'applier_id' => rand(1, 10),
    //             'selected_medical_id' => rand(1, 10),
    //             'selected_training_id' => rand(1, 10),
    //             'job_vacancy' => rand(50, 99),
    //             'applied_vacancy' => rand(30, 50),
    //             'approved_vacancy' => rand(20, 30),
    //             'remarks'  => Str::random(10),
    //             'applier_agency_name'  => 'recruiter agency '. $i,
    //             'datetime'  => now(),
    //             'status' => $i % 2 == 0 ? 'Approved' : 'Applied',
    //             'approved_by' => 'admin',
    //             'approved_date' => now(),
    //             'approved_company_name'  => 'kamrul Group',
    //             'approved_id' => rand(1, 10),
    //             'approved_remarks'  => Str::random(10),
    //        ]);
    //    }

    }
}
