<?php

return [
    'label' => 'Bank',
    'model' => \App\Models\MtBankAccount::class,
    // 'table' => \App\Http\Livewire\Table\LocationTable::class,

    'schema' => [
        [
            'name' => 'bank_account_name',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nama Bank',
        ],
        [
            'name' => 'is_active',
            'type' => \Laravolt\Fields\Field::DROPDOWN,
            'label' => 'Status',
            'options' => [1 => 'Aktif', 0 => 'Tidak Aktif'],
        ]
    ],
];