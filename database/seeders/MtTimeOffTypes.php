<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MtTimeOffTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_time_off_types')->insert([
            [
                'id' => 'dab77d75-19ae-4c5d-a1af-fabb762bb0e9',
                'time_off_desc' => 'Sakit',
                'is_reduce_time_off' => false,
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'id' => 'b58ed2e9-0fde-4fe9-a392-3de83c0728e2',
                'time_off_desc' => 'Izin',
                'is_reduce_time_off' => true,
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'id' => '0d7a1a1e-933b-4f8c-b259-18eb4b987633',
                'time_off_desc' => 'Cuti Tahunan',
                'is_reduce_time_off' => true,
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'id' => '74224cae-b0ce-4d10-bce7-02eff1611db6',
                'time_off_desc' => 'Cuti Tidak Dibayar',
                'is_reduce_time_off' => false,
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'id' => 'b6d5e7b3-e8da-4c4f-a0e6-791cb1c4a650',
                'time_off_desc' => 'Cuti Menikah',
                'is_reduce_time_off' => false,
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'id' => 'ccc9a8eb-dcd3-4c7c-be3b-05fb98658308',
                'time_off_desc' => 'Cuti Melahirkan',
                'is_reduce_time_off' => false,
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'id' => 'd21d8dfa-7cc1-4c12-ad84-fcb2862ac4ff',
                'time_off_desc' => 'Cuti Keluarga Meninggal',
                'is_reduce_time_off' => false,
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'id' => '102f1865-5f5e-4ff8-8e2b-baebda68a0ce',
                'time_off_desc' => 'Cuti Ibadah Haji',
                'is_reduce_time_off' => false,
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ]
        ]);
    }
}
