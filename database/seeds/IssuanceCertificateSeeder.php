<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IssuanceCertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 11; $i < 20; $i++) {
            DB::table('issuance_certificates')->insert([
                'candidate_id' => rand(11, 19),
                'company_id' => 8,
                'wsc_id' => 6,
                'service_type' => 'Demo service ' . $i,
                'comments' => 'Demo Comments',
                'service_status' => 'Approved',
                'delivery_status' => 'Approved',
                'delivery_charge' => rand(100, 200),
                'fees' => rand(1000, 2000),
                'delivery_to' => 'Dhaka bonani',
                'document'  => null,
                'delivery_type'  => 'Door delivery',
                'created_id'  => rand(11, 19),
                'created_at'  => Carbon::now(),
                // 'deleted'  => Carbon::now(),
            ]);
        }
    }
}
