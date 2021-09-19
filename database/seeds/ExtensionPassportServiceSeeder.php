<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;

class ExtensionPassportServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('extension_passport_services')->insert([
                'candidate_id' => rand(11, 19),
                'company_id' => 6,
                'wsc_id' => 6,
                'candidate_name' => 'Demo Candidate '.$i,
                'company_name' => 'Demo Company '.$i,
                'b_embassy_id' => 2,
                'cpr'  => rand(5000, 50000),
                'salary_type'  => rand(5000, 50000),
                'comments'  => 'Demo Comments',
                'service_status'  => 'Open',
                'fees'  => 200,
                'delivery_type'  => null,
                'delivery_to'  => null,
                'delivery_status' => null,
                'extention_passport' => null,
                'passport' => null,
                'reject_reason' => null,
                'created_id' => 6,
                'created_at' => Carbon::now(),
                // 'deleted' => Carbon::now()
            ]);
        }
    }
}
