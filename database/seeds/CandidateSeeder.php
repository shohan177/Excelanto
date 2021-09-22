<?php

use App\AppliedJob;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Candidate;
use App\OfferedCandidate;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('candidates')->insert([
                'candidate_name' =>   'Demo Name ' . $i,
                'role_id' => 15,
                'job_id' => rand(1, 10),
                'company_id' => rand(1, 10),
                'job_category_id' => rand(1, 10),
                'candidate_dob' => '2021-30-07',
                'candidate_gender' => 'male',
                'passport_number' => Str::random(18),
                'phone_number' => '01856230550',
                'candidate_email' => 'demon' . $i . '@gmail.com',
                'status' => 'Active',
                // 'result_status' => 'New',
                'nationality' => 'bangladesh',
                'present_address' => 'dhaka bangladesh',
                'permanent_address' => 'bahrain',
                'created_id' => 3,
                'created_at' => Carbon::now(),
            ]);
        }

        for ($i = 11; $i < 20; $i++) {
            $appliedJob = AppliedJob::findOrFail(11);

            $candidate_id =  DB::table('candidates')->insertGetId([
                'candidate_name' =>   'Demo Name ' . $i,
                'role_id' => 15,
                'job_id' => $appliedJob->job_post_id,
                'company_id' => $appliedJob->company_id,
                'job_category_id' => $appliedJob->jobPost->job_category_id,
                'candidate_dob' => '2021-30-07',
                'candidate_gender' => 'male',
                'passport_number' => Str::random(18),
                'phone_number' => '01856230550',
                'candidate_email' => 'demon' . $i . '@gmail.com',
                'status' => 'Selected',
                'result_status' => 'Selected',
                'nationality' => 'bangladesh',
                'present_address' => 'dhaka bangladesh',
                'permanent_address' => 'bahrain',
                'created_id' => 3,
                'created_at' => Carbon::now(),
            ]);
            $candidate = Candidate::findOrFail($candidate_id);

            $offeredCandidate = new OfferedCandidate();
            $offeredCandidate->candidate_id = $candidate->id;
            $offeredCandidate->candidate_name = $candidate->candidate_name;
            $offeredCandidate->phone_number = $candidate->phone_number;
            $offeredCandidate->selected_osc_id = 11;
            // $offeredCandidate->post_biometric_id = 4;
            $offeredCandidate->candidate_email = $candidate->candidate_email;
            $offeredCandidate->travel_status = 'Ticket-Issued';
            $offeredCandidate->job_category_id = $candidate->job_category_id;
            $offeredCandidate->job_post_id = $candidate->job_id;
            // $offeredCandidate->result_status = ($i == 11 ? 'Post-Processing' : 'Selected');
            $offeredCandidate->result_status = 'Recommended';
            $offeredCandidate->post_medical_status = $i == 11 ? 'New' : null;
            $offeredCandidate->employer_comments = Str::random(10);
            $offeredCandidate->created_at = Carbon::now();
            $offeredCandidate->created_id = 8;
            $offeredCandidate->welfare_center_id = 6;
            $offeredCandidate->travel_agency_id = 3;
            $offeredCandidate->post_medical_id = 12;
            $offeredCandidate->save();
        }
    }
}
