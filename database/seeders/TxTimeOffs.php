<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TxTimeOffs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tx_time_off')->insert([
            'id' => '881a4175-5833-445a-8daf-e81607b82a68',
            'time_off_desc' => 'Healing Coy',
            'time_off_date' => '2022-11-04',
            'time_off_type_id' => '0d7a1a1e-933b-4f8c-b259-18eb4b987633',
            'time_off_pic_id' => 1,
            'time_off_line_approve' => json_encode(["supervisor" => 1, "manager" => 1]),
            'is_active' => true,
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
