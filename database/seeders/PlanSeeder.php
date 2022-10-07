<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            [
                'id' => 1,
                'type' => "RECURRING",
                'name' => "Plan 1",
                'price' => 99.00,
                'capped_amount' => 0.00,
                'terms' => "Plan 1",
                'trial_days' => 0,
                'test' => 1,
                'on_install' => 1
            ],
        ]);
    }
}
