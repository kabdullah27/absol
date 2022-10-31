<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MtRelationship extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mt_relationships')->insert([
            [   
                'id' => '6f8035a9-e0d0-4555-8675-7ec62a1bab0f',
                'relationship_name' => 'Father',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => 'fcbd692d-95fe-48ea-bc94-7256185cf52c',
                'relationship_name' => 'Mother',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => '58f4a9ad-b615-4db4-a0e0-b0a19e5b0042',
                'relationship_name' => 'Siblings',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => 'c3445df5-d97f-494f-8a69-9e6540eb64a3',
                'relationship_name' => 'Spouse',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => '11b43225-7730-493a-8ff9-0422a041bde3',
                'relationship_name' => 'Child',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => '7b5a1db9-c2c7-4ea5-a900-5ca1a50d98af',
                'relationship_name' => 'Cousin',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => '06a8fd43-86de-4c12-84e0-51ede5de3882',
                'relationship_name' => 'Nibling',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => '2d123ec5-8850-46fa-ab9b-b1f9736eaaa7',
                'relationship_name' => 'Uncle',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => '5e381fea-c8d0-4f0a-a5d0-3049227509a4',
                'relationship_name' => 'Aunt',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => 'bab2ad5b-0897-40ab-a6f2-515aa58de09f',
                'relationship_name' => 'Friend',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => '44661a23-bb7e-4cb0-9430-fbb773b8eec5',
                'relationship_name' => 'Coworker',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [   
                'id' => '68295949-f3b1-4b9a-aded-1085832141dc',
                'relationship_name' => 'Others',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ]
        ]);
    }
}
