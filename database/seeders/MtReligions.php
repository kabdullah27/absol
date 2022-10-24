<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MtReligions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_religions')->insert(
            [   
                'id' => '1adcb7c6-2d9b-42cb-817d-ceedde7867fa',
                'religion_name' => 'ISLAM',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => '4d076924-cdbe-438e-bb05-80e06bf93ed8',
                'religion_name' => 'Kristen Protestan',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => 'b631a71d-08f3-414e-a70d-e435943a90bc',
                'religion_name' => 'Kristen Katolik',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => 'afd44c52-a1c4-4d73-9865-4f48aa2e783c',
                'religion_name' => 'Hindu',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => 'dd568781-56de-4065-9add-fa221d42016e',
                'religion_name' => 'Budha',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => 'facb109a-3ddb-4c6e-a8f9-2e6e9199f396',
                'religion_name' => 'Konghucu',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ]
        );
    }
}
