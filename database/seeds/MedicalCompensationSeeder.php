<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalCompensationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 11; $i < 20; $i++) {
            DB::table('medical_compensation')->insert([
                'candidate_id' => rand(11, 19),
                'company_id' => 1,
                'wsc_id' => 6,
                'candidate_name' => 'Demo name ' . $i,
                'company_name' => 'Demon Co. name',
                'sick_type' => 'Fiver / Cold',
                'doctor_name' =>  'Demo Doctor name',
                'hospital_name' =>  'Demo Hospital name',
                'prescription' => null,
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
