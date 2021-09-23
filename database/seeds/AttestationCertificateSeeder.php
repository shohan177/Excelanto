<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttestationCertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 11; $i < 20; $i++) {
            DB::table('attestation_certificates')->insert([
                'candidate_id' => rand(11, 19),
                'company_id' => 8,
                'wsc_id' => 6,
                'service_type' => 'Demo service ' . $i,
                'comments' => 'Demo Comments',
                'service_status' => 'Approved',
                'created_id' => rand(11, 19),
                'fees' => rand(100, 200),
                'delivery_charge' => rand(1000, 2000),
                'delivery_type' => 'Door delivery',
                'delivery_to'  => 'Bonani Dhaka',
                'document'  => null,
                'legal_status'  => 'Approved',
                'delivery_status'  => rand(11, 19),
                'created_at'  => Carbon::now(),
                // 'deleted'  => Carbon::now(),
            ]);
        }
    }
}
