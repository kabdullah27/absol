<?php

namespace App\Http\Livewire\Table;

use Laravolt\AutoCrud\Tables\ResourceTable;

class HolidayTable extends ResourceTable
{
    protected function prepareColumns(): array
    {
        // keep default columns, call parent method
        $columns = parent::prepareColumns();
        return $columns;
    }
}