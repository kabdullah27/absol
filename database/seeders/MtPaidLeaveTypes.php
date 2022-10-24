<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MtPaidLeaveTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_paid_leave_types')->insert([
            'id' => '0d7a1a1e-933b-4f8c-b259-18eb4b987633',
            'paid_leave_name' => 'Cuti Tahunan',
            'is_active' => true,
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
