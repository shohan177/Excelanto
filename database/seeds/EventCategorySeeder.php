<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('event_categories')->insert([
                'category_name' => Str::random(10),
                'status' => 'active',
            ]);
        }

        DB::table('event_categories')->insert([
            'category_name' => "Health and Safety",
            'status' => 'active',
        ]);

        DB::table('event_categories')->insert([
            'category_name' => "Drug Handling",
            'status' => 'active',
        ]);

        DB::table('event_categories')->insert([
            'category_name' => "Remittance",
            'status' => 'active',
        ]);
    }
}
