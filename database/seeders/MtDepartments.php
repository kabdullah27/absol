<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MtDepartments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_departments')->insert([
            'id' => '286f7de0-b9c5-41b6-86c3-b5aa39dc9bed',
            'department_name' => 'Technology',
            'is_active' => true,
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
