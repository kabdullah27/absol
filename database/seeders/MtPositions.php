<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MtPositions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_positions')->insert([
            'id' => '56b68be7-9722-4e07-850f-2d0825609479',
            'position_level' => 1,
            'position_name' => 'CEO',
            'is_active' => true,
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
