<?php

return [
    'label' => 'Persetujuan Atasan',
    'model' => \App\Models\MtApproveLine::class,
    // 'table' => \App\Http\Livewire\Table\LocationTable::class,

    'schema' => [
        [
            'type' => Laravolt\Fields\Field::BELONGS_TO,
            'name' => 'user',
            'sortable' => 'approve_line_user_id',
            'label' => 'Yang menyetujui',
        ],
        [
            'name' => 'approve_line_type',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Tipe',
            'options' => ['request_time_off' => 'Cuti', 'reimbursement' => 'Reimbursement'],
        ],
        [
            'name' => 'approve_line_desc',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Keterangan',
        ],
        [
            'name' => 'is_active',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Status',
            'options' => [1 => 'Aktif', 0 => 'Tidak Aktif'],
        ]
    ],
];
