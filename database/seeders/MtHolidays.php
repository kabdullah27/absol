<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MtHolidays extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_holidays')->insert([
            'id' => 'b8440b57-cb09-4e98-a953-135e584e531c',
            'holiday_date' => '2022-08-17',
            'holiday_name' => 'Hari Kemerdekaan Indonesia',
            'is_active' => true,
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
