<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UpdateUserEmployee extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->where('id', 1)->update(['employee_id' => '308bb004-73ef-478d-a9d1-0193a949742d']);
    }
}
