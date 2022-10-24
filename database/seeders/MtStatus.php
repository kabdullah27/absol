<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MtStatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_status')->insert([
            'id' => 'a82ac493-e760-49e0-943d-858a967a75cf',
            'status_name' => 'Permanen',
            'is_active' => true,
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
