<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubmittedTravelEnquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('submitted_travel_enquiries')->insert([
                'enquiry_id' => rand(1, 5),
                'journey_date' => Carbon::now()->addDays(2),
                'total_tickets' => 2,
                'submitted_cost' => 20000,
                'travel_agency_comments'  => 'Demo Comments',
                'travel_agency_id'  => 3,
                'submitted_date'  => Carbon::now(),
                'submitted_status'  => 'New',
            ]);
        }
    }
}
