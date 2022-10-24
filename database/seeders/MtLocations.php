<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MtLocations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_locations')->insert([
            'id' => '7ecb0335-3712-4079-ab5b-212798f441b1',
            'location_name' => 'Infact',
            'location_lat' => '-7.6855519',
            'location_long' => '109.0395162',
            'is_active' => true,
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
