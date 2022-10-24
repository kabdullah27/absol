<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MtShifts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_shifts')->insert([
            'id' => '50902f0d-3267-4b52-8050-6a6fddaedc7b',
            'shift_name' => 'Pagi',
            'shift_start' => '07:00',
            'shift_end' => '16:00',
            'is_active' => true,
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
