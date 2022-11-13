<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MtSchedules extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_schedules')->insert([
            'id' => '27e67bf0-17e8-4653-a3eb-2e6440c2e7aa',
            'schedule_date' => '2022-11-01',
            'shift_id' => '50902f0d-3267-4b52-8050-6a6fddaedc7b',
            'user_id' => 1,
            'is_active' => true,
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
