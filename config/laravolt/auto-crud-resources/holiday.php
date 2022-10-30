<?php

return [
    'label' => 'Libur',
    'model' => \App\Models\MtHoliday::class,

    // optional, if you want to override the default Table
    'table' => \App\Http\Livewire\Table\HolidayTable::class,

    'schema' => [
        [
            'name' => 'created_by',
            'type' => \Laravolt\Fields\Field::HIDDEN,
        ],
        [
            'name' => 'updated_by',
            'type' => \Laravolt\Fields\Field::HIDDEN,
        ],
        [
            'name' => 'holiday_date',
            'type' => \Laravolt\Fields\Field::DATE_PICKER,
            'label' => 'Tanggal Libur',
        ],
        [
            'name' => 'holiday_name',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nama Libur',
        ],
        [
            'name' => 'is_active',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Status',
            'options' => [1 => 'Aktif', 0 => 'Tidak Aktif'],
        ]
    ],
];