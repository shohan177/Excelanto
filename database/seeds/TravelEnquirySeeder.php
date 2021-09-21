<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TravelEnquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('travel_enquiries')->insert([
                'oss_id' => 11,
                'start_point' => 'Dhaka Bangladesh',
                'end_point' => 'Dubai UAE',
                'tickets_required' => 2,
                'date_of_journey'  => Carbon::now()->addDays(2),
                'end_date'  => Carbon::now()->addDays(7),
                'oss_comments'  => 'Demo Comment',
                'enquiry_status'  => 'New',
                'created_date'  => Carbon::now(),
                'created_at'  => Carbon::now(),
                // 'deleted'  => Carbon::now(),
            ]);
        }
    }
}
