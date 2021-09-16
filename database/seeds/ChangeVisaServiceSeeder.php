<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChangeVisaServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 11; $i < 20; $i++) {
            DB::table('change_visa_services')->insert([
                'candidate_id' => rand(11, 19),
                'company_id' =>8,
                'wsc_id' =>  6,
                'cpr' =>  rand(100000, 500000),
                'service_type' =>  'Demo Services',
                'fees' => rand(100, 500),
                'delivery_type' => 'Door delivery',
                'delivery_charge' => rand(50, 60),
                'document' => null,
                'delivery_to'  => 'Banani Dhaka',
                'delivery_status'  => 'Open',
                'comments'  =>'Demo Comments',
                'service_status'  =>'Open',
                'created_id'  => rand(11, 19),
                'created_at'  => Carbon::now(),
                // 'deleted'  => Carbon::now(),
            ]);
        }
    }
}
