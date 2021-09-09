<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeadbodyTransferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 11; $i < 20; $i++) {
            DB::table('deadbody_transfers')->insert([
                'wsc_id' => 6,
                'candidate_name' => 'Demo candidate '.$i,
                'company_name' => 'Demo Co. name '.$i,
                'deadbody_name' => 'Demo name '.$i,
                'relation' => 'Brother',
                'passport_copy' => null,
                'passport_number' =>  rand(1000,2000),
                'passport_expirydate' => Carbon::now()->addYears(5),
                'visa_number' => rand(1000,2000),
                'visa_expirydate' => Carbon::now()->addYears(5),
                'cause_of_death' => 'Couse of Death',
                'bangladesh_address'  => 'Bonani Dhaka',
                'relative_name'  => 'Demo Relative name',
                'contact_number'  => rand(10000000,20000000),
                'comments'  => 'Demo Comments',
                'active_status' => 'Open',
                'created_id'  => rand(11,19),
                'created_at'  => Carbon::now(),
                // 'deleted'  => Carbon::now(),
            ]);
        }
    }
}
