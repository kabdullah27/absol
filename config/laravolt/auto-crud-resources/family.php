<?php

return [
    'label' => 'Keluarga',
    'model' => \App\Models\MtFamily::class,

    // optional, if you want to override the default Table
    // 'table' => \App\Http\Livewire\Table\MtEmergencyContact::class,

    'schema' => [
        [
            'name' => 'family_name',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nama',
        ],
        [
            'type' => Laravolt\Fields\Field::BELONGS_TO,
            'name' => 'relationship',
            'sortable' => 'family_relationship_id',
            'label' => 'Hubungan',
        ],
        [
            'name' => 'family_date_of_birth',
            'type' => \Laravolt\Fields\Field::DATE_PICKER,
            'label' => 'Tanggal Lahir',
        ],
        [
            'name' => 'family_gender',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Jenis Kelamin',
            'options' => ['male' => 'Pria', 'female' => 'Wanita'],
        ],
        [
            'name' => 'family_job',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Pekerjaan',
            // 'rules' => ['size:50'],
        ],
        [
            'name' => 'family_address',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Alamat',
            // 'rules' => ['required', 'size:255'],
        ],
        [
            'name' => 'is_active',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Status',
            'options' => [1 => 'Aktif', 0 => 'Tidak Aktif'],
        ]
    ],
];