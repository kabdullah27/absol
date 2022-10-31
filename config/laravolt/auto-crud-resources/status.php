<?php

return [
    'label' => 'Status Karyawan',
    'model' => \App\Models\MtStatus::class,

    // optional, if you want to override the default Table
    'table' => \App\Http\Livewire\Table\HolidayTable::class,

    'schema' => [
        [
            'name' => 'status_name',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nama Status',
        ],
        [
            'name' => 'is_active',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Status',
            'options' => [1 => 'Aktif', 0 => 'Tidak Aktif'],
        ]
    ],
];