<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LostPassportServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('lost_passport_services')->insert([
                'candidate_id' => rand(11, 19),
                'company_id' => 6,
                'wsc_id' => 6,
                'b_embassy_id' => 2,
                'cpr'  => rand(5000, 50000),
                'bhr_mobile_no'  => rand(5000, 50000),
                'bangladesh_mobile'  => rand(5000, 50000),
                'bangladesh_address'  => Str::random(50, 500),
                'spouse_cpr'  => Str::random(50, 500),
                'spouse_mobile'  => rand(50, 500),
                'salary'  => rand(5000, 50000),
                'comments'  => 'Demo Comments',
                'service_status'  => 'Open',
                'fees'  => 200,
                'delivery_type'  => null,
                'delivery_to'  => null,
                'delivery_status' => null,
                'passport' => null,
                'reject_reason' => null,
                'created_id' => 6,
                'created_at' => Carbon::now(),
                // 'deleted' => Carbon::now()
            ]);
        }
    }
}
