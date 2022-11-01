<?php

return [
    'label' => 'Karyawan',
    'model' => \App\Models\MtEmployee::class,

    // optional, if you want to override the default Table
    'table' => \App\Http\Livewire\Table\EmployeeTable::class,

    'schema' => [
        [
            'name' => 'employee_name',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nama',
        ],
        [
            'name' => 'employee_approval_line_id',
            'type' => \Laravolt\Fields\Field::DROPDOWN_DB,
            'label' => 'Atasan',
            'query' => 'select users.id, mt_employees.employee_name as name from users
                        left join mt_employees on mt_employees.id = users.employee_id'
        ],
        [
            'name' => 'employee_identity_type',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Tipe Identitas',
        ],
        [
            'name' => 'employee_identity_number',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nomor Identitas',
        ],
        [
            'name' => 'employee_npwp',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'NPWP',
        ],
        [
            'name' => 'employee_bpjs',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'BPJS Kesehatan',
        ],
        [
            'name' => 'employee_bpjstk',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'BPJS Ketenagakerjaan',
        ],
        [
            'type' => Laravolt\Fields\Field::BELONGS_TO,
            'name' => 'bank_account',
            'sortable' => 'bank_account_name',
            'label' => 'Nama Bank',
        ],
        [
            'name' => 'employee_bank_account_number',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nomor Rekening',
        ],
        [
            'name' => 'employee_place_of_birth',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Tempat Lahir',
        ],
        [
            'name' => 'employee_date_of_birth',
            'type' => \Laravolt\Fields\Field::DATE_PICKER,
            'label' => 'Tanggal Lahir',
        ],
        [
            'type' => Laravolt\Fields\Field::BELONGS_TO,
            'name' => 'religion',
            'sortable' => 'religion_name',
            'label' => 'Agama',
        ],
        [
            'name' => 'employee_address',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Alamat',
        ],
        [
            'name' => 'employee_handphone_number',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nomor Handphone',
        ],
        [
            'name' => 'employee_gender',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Jenis Kelamin',
            'options' => ['male' => 'Pria', 'female' => 'Wanita'],
        ],
        [
            'name' => 'employee_marital_status',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Jenis Kelamin',
            'options' => ['single' => 'Belum Menikah', 'married' => 'Sudah Menikah', 'widow' => 'Janda', 'widower' => 'Duda'],
        ],
        [
            'type' => Laravolt\Fields\Field::BELONGS_TO,
            'name' => 'department',
            'sortable' => 'department_name',
            'label' => 'Departement',
        ],
        [
            'type' => Laravolt\Fields\Field::BELONGS_TO,
            'name' => 'position',
            'sortable' => 'position_name',
            'label' => 'Jabatan',
        ],
        [
            'name' => 'employee_join_date',
            'type' => \Laravolt\Fields\Field::DATE_PICKER,
            'label' => 'Tanggal join',
        ],
        [
            'name' => 'employee_end_date',
            'type' => \Laravolt\Fields\Field::DATE_PICKER,
            'label' => 'Tanggal keluar',
        ],
        [
            'type' => Laravolt\Fields\Field::BELONGS_TO,
            'name' => 'status',
            'sortable' => 'status_name',
            'label' => 'Status',
        ],
        [
            'name' => 'is_active',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Status',
            'options' => [1 => 'Aktif', 0 => 'Tidak Aktif'],
        ]
    ],
];