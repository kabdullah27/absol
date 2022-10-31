<?php

return [
    'label' => 'Jabatan',
    'model' => \App\Models\MtPosition::class,
    // 'table' => \App\Http\Livewire\Table\LocationTable::class,

    'schema' => [
        [
            'name' => 'position_name',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nama Posisi',
        ],
        [
            'name' => 'position_level',
            'type' => \Laravolt\Fields\Field::NUMBER,
            'label' => 'Posisi Level',
        ],
        [
            'name' => 'position_parent_id',
            'type' => \Laravolt\Fields\Field::DROPDOWN_DB,
            'label' => 'Posisi Atasan',
            'query' => 'select id, position_name as name from mt_positions'
        ],
        [
            'name' => 'is_active',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Status',
            'options' => [1 => 'Aktif', 0 => 'Tidak Aktif'],
        ]
    ],
];