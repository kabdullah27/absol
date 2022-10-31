<?php

return [
    'label' => 'Emergency Contact',
    'model' => \App\Models\MtEmergencyContact::class,

    // optional, if you want to override the default Table
    // 'table' => \App\Http\Livewire\Table\MtEmergencyContact::class,

    'schema' => [
        [
            'name' => 'name',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nama',
        ],
        [
            'type' => Laravolt\Fields\Field::BELONGS_TO,
            'name' => 'relationship',
            'sortable' => 'relationship_name',
            'label' => 'Hubungan',
        ],
        [
            'name' => 'phone_number',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nomor Telephone',
        ],
        [
            'name' => 'is_active',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Status',
            'options' => [1 => 'Aktif', 0 => 'Tidak Aktif'],
        ]
    ],
];