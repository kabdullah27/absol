<?php

return [
    'label' => 'Departemen',
    'model' => \App\Models\MtDepartment::class,
    // 'table' => \App\Http\Livewire\Table\LocationTable::class,

    'schema' => [
        [
            'name' => 'department_name',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nama Departemen',
        ],
        [
            'name' => 'is_active',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Status',
            'options' => [1 => 'Aktif', 0 => 'Tidak Aktif'],
        ]
    ],
];