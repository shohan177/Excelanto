<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmnestyServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 11; $i < 20; $i++) {
            DB::table('amnesty_services')->insert([
                'candidate_id' => rand(11, 19),
                'company_id' => 8,
                'wsc_id' => 6,
                'service_type' => 'Demo service ' . $i,
                'cpr' =>  rand(100000, 500000),
                'amnesty_application' => null,
                'comments' => 'Demo Comments',
                'service_status' => 'Paid',
                'delivery_status' => 'Open',
                'delivery_charge' =>  rand(11, 19),
                'fees'  => rand(11, 19),
                'delivery_to'  => 'Banani Dhaka',
                'amnesty_pdf'  => null,
                'delivery_type'  => 'Door delivery',
                'created_id'  => rand(11, 19),
                'created_at'  => Carbon::now(),
                // 'deleted'  => Carbon::now(),
            ]);
        }
    }
}
