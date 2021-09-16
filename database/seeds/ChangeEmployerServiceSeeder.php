<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChangeEmployerServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 11; $i < 20; $i++) {
            DB::table('change_employer_services')->insert([
                'candidate_id' => rand(11, 19),
                'company_id' =>8,
                'wsc_id' =>  6,
                'cpr' =>  rand(100000, 500000),
                'new_offer_letter' => null,
                'comments' => 'Demo Comments',
                'service_status' => 'Open',
                'delivery_type' => 'Open',
                'fees' =>  rand(11, 19),
                'delivery_charge'  => rand(11, 19),
                'delivery_to'  => 'Banani Dhaka',
                'delivery_status'  => 'Door delivery',
                'document'  => null,
                'created_id'  => rand(11, 19),
                'created_at'  => Carbon::now(),
                // 'deleted'  => Carbon::now(),
            ]);
        }
    }
}
