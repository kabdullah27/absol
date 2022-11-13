<?php

return [
    'label' => 'Tipe Cuti',
    'model' => \App\Models\MtTimeOffType::class,

    // optional, if you want to override the default Table
    // 'table' => \App\Http\Livewire\Table\HolidayTable::class,

    'schema' => [
        [
            'name' => 'time_off_desc',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nama Cuti',
        ],
        [
            'name' => 'is_reduce_time_off',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Mengurangi Cuti',
            'options' => [1 => 'Ya', 0 => 'Tidak'],
        ],
        [
            'name' => 'is_active',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Status',
            'options' => [1 => 'Aktif', 0 => 'Tidak Aktif'],
        ]
    ],
];