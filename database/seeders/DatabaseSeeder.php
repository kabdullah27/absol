<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MtPaidLeaveTypes::class,
            MtLocations::class,
            MtHolidays::class,
            MtShifts::class,
            MtBankAccounts::class,
            MtReligions::class,
            MtDepartments::class,
            MtPositions::class,
            MtStatus::class,
            TxPaidLeaves::class,
            MtSchedules::class,
        ]);
    }
}
