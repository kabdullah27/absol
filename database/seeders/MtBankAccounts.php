<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MtBankAccounts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_bank_accounts')->insert([
            'id' => 'a37cd19e-ed8b-4f85-924a-0b3b75fc6796',
            'bank_account_name' => 'Bank Central Asia',
            'is_active' => true,
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
