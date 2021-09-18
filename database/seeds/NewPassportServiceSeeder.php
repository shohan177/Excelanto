<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewPassportServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('new_passport_services')->insert([
                'candidate_id' => rand(11, 19),
                'company_id' => 6,
                'wsc_id' => 6,
                'candidate_name' => 'Demo Candidate Name',
                'company_name'  => 'Demo Company Name',
                'salary_type'  => 'Full Time',
                'cpr'  => rand(5000, 50000),
                'comments'  => 'Demo Comments',
                'new_offer_application'  => null,
                'service_status'  => 'Open',
                'photo'  => null,
                'biometric'  => null,
                'fees'  => 200,
                'delivery_type'  => null,
                'delivery_to'  => null,
                'delivery_status' => null,
                'new_passport' => null,
                'reject_reason' => null,
                'created_id' => 6,
                'created_at' => Carbon::now(),
                // 'deleted' => Carbon::now()
            ]);
        }
    }
}
