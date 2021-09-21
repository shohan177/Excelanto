<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 11; $i < 20; $i++) {
            DB::table('payment_services')->insert([
                'candidate_id' => rand(11, 19),
                'company_id' => 8,
                'wsc_id' => 6,
                'service_type' => 'Demo service ' . $i,
                'cpr' =>  rand(100000, 500000),
                'comments' =>  'Demo Comments',
                'payment_application' => null,
                'service_status' => 'Open',
                'penalty_pdf' => null,
                'fees' =>  rand(100, 300),
                'delivery_charge'  => rand(80, 90),
                'delivery_type'  =>  'Door delivery',
                'delivery_to'  => 'Banani Dhaka',
                'delivery_status'  =>'Open',
                'created_id'  => rand(11, 19),
                'created_at'  => Carbon::now(),
                // 'deleted'  => Carbon::now(),
            ]);
        }
    }
}
