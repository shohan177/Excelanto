<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JailDeportationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 11; $i < 20; $i++) {
            DB::table('jail_and_deportations')->insert([
                'candidate_id' => $i,
                'company_id' => 8,
                'wsc_id' => 6,
                'job_category_id' => rand(1,12),
                'person_name' => 'Demo Name '.$i,
                'person_relation' => 'Brother ',
                'passport_number' =>  rand(1000,2000),
                'passport_expirydate' => Carbon::now()->addYears(5),
                'visa_number' => rand(1000,2000),
                'visa_expirydate' => Carbon::now()->addYears(5),
                'cause_of_arrest' => 'Couse of Arrest',
                'police_station_name'  => 'Demo Police Station',
                'arrest_date'  => Carbon::now()->addDays(-5),
                'passport_copy'  => null,
                'comments'  => 'Demo Comments',
                'created_id' => rand(1,19),
                'active_status'  => 'Open',
                'created_at'  => Carbon::now(),
                // 'deleted'  => Carbon::now(),
            ]);
        }
    }
}
