<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MtEmployee extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_employees')->insert([
            'id' => '308bb004-73ef-478d-a9d1-0193a949742d',
            'employee_name' => 'Agus',
            'employee_identity_type' => 'KTP',
            'employee_identity_number' => '123332123',
            'employee_npwp' => '12312123',
            'employee_bpjs' => '12312312312321',
            'employee_bpjstk' => '12312312312321',
            'bank_account_id' => 'a37cd19e-ed8b-4f85-924a-0b3b75fc6796',
            'employee_bank_account_number' => '123123123123',
            'employee_place_of_birth' => '2022-01-01 00:00:00.000',
            'religion_id' => '1adcb7c6-2d9b-42cb-817d-ceedde7867fa',
            'employee_address' => 'Jalan-jalan',
            'employee_handphone_number' => '12333422123',
            'employee_gender' => 'male',
            'employee_marital_status' => 'single',
            'department_id' => '286f7de0-b9c5-41b6-86c3-b5aa39dc9bed',
            'position_id' => '56b68be7-9722-4e07-850f-2d0825609479',
            'employee_join_date' => '2022-01-01 00:00:00.000',
            'employee_end_date' => '2022-01-01 00:00:00.000',
            'status_id' => 'a82ac493-e760-49e0-943d-858a967a75cf',
            'is_active' => true,
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
