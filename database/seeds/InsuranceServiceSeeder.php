<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsuranceServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 11; $i < 20; $i++) {
            DB::table('insurance_services')->insert([
                'candidate_id' => rand(11, 19),
                'company_id' => 8,
                'wsc_id' => 6,
                'service_type' => 'Demo service ' . $i,
                'insurance_number' => rand(10000000, 20000000),
                'insurance_card' => null,
                'comments'  => 'Demo Comments',
                'service_status'  => 'Open',
                'created_id'  => rand(11, 19),
                'created_at'  => Carbon::now(),
                // 'deleted'  => Carbon::now(),
            ]);
        }
    }
}
