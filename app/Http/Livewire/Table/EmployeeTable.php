<?php

namespace App\Http\Livewire\Table;

use Laravolt\Suitable\Columns\Numbering;
use Laravolt\Suitable\Columns\Raw;
use Laravolt\Suitable\Columns\Text;
use Laravolt\Ui\TableView;
use App\Models\MtEmployee as Employee;

class EmployeeTable extends TableView
{
    public function data()
    {
        $searchabledColumns = config('laravolt.epicentrum.repository.searchable', []);
        $query = Employee::with(['user', 'department', 'position'])
            ->autoSort($this->sortPayload())
            ->autoFilter()
            ->whereLike($searchabledColumns, trim($this->search))
            ->latest();

        return $query;
    }

    public function columns(): array
    {
        return [
            Numbering::make('No'),
            Text::make('employee_name', 'Name')->sortable(),
            Text::make('employee_handphone_number', 'Handphone Number'),
            Raw::make(
                function ($data) {
                    return $data->department->department_name;
                },
                'Departemen'
            ),
            Raw::make(
                function ($data) {
                    return $data->position->position_name;
                },
                'Jabatan'
            ),
            Raw::make(
                function ($data) {
                    return $data->user->email;
                },
                'Email'
            )
        ];
    }
}
