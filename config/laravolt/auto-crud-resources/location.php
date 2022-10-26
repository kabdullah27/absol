<?php

return [
    'label' => 'Lokasi',
    'model' => \App\Models\MtLocation::class,
    'table' => \App\Http\Livewire\Table\LocationTable::class,

    'schema' => [
        [
            'name' => 'location_name',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nama Lokasi',
        ],
        [
            'name' => 'location_long',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Lokasi longitude',
        ],
        [
            'name' => 'location_lat',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Lokasi latitude',
        ],
        [
            'name' => 'is_active',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Status',
            'options' => [1 => 'Aktif', 0 => 'Tidak Aktif'],
        ]
    ],
];