<?php

return [
    'label' => 'Jam Kerja',
    'model' => \App\Models\MtShift::class,

    // optional, if you want to override the default Table
    // 'table' => \App\Http\Livewire\Table\MtEmergencyContact::class,

    'schema' => [
        [
            'name' => 'shift_name',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nama',
        ],
        [
            'name' => 'shift_start',
            'type' => \Laravolt\Fields\Field::TIME,
            'label' => 'Jam Masuk',
        ],
        [
            'name' => 'shift_end',
            'type' => \Laravolt\Fields\Field::TIME,
            'label' => 'Jam Pulang',
        ],
        [
            'name' => 'shift_late',
            'type' => \Laravolt\Fields\Field::TIME,
            'label' => 'Toleransi Keterlambatan',
        ],
        [
            'name' => 'is_active',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Status',
            'options' => [1 => 'Aktif', 0 => 'Tidak Aktif'],
        ]
    ],
];