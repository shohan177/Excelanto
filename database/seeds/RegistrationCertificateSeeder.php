<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistrationCertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 11; $i < 20; $i++) {
            DB::table('registration_certificates')->insert([
                'company_id' => 8,
                'candidate_id' => rand(11, 19),
                'wsc_id' => 6,
                'service_type' => 'Demo service ' . $i,
                'comments' => 'Demo Comments',
                'service_status' => 'Paid',
                'delivery_type' => 'Door delivery',
                'delivery_charge'  => rand(100, 200),
                'document'  => null,
                'delivery_to'  => 'Bonani Dhaka',
                'delivery_status'  => rand(11, 19),
                'fees'  => rand(1000, 2000),
                'created_id'  => rand(11, 19),
                'created_at'  => Carbon::now(),
                // 'deleted'  => Carbon::now(),
            ]);
        }
    }
}
