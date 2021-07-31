<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Candidate;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            DB::table('candidates')->insert([
                'candidate_name' =>   Str::random(10),
                'role_id' => 15,
                'job_id' => rand(1, 10),
                'company_id' => rand(1, 10),
                'job_category_id' => rand(1, 10),
                'candidate_dob' => '2021-30-07',
                'candidate_gender' => 'male',
                'passport_number' => Str::random(10),
                'phone_number' => '01856230550',
                'candidate_email' => Str::random(10). '@gmail.com',
                'status' => 'Active',
                'nationality' => 'bangladesh',
                'present_address' => 'dhaka bangladesh',
                'permanent_address' => 'bahrain',
                'created_id' => rand(1, 10),
                'created_at' => Carbon::now(),
            ]);
       }
    }
}
