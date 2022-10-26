<?php

namespace App\Http\Livewire\Table;

use Laravolt\AutoCrud\Tables\ResourceTable;
use Laravolt\Suitable\Columns\Label;

class LocationTable extends ResourceTable
{
    protected function prepareColumns(): array
    {
        // keep default columns, call parent method
        $columns = parent::prepareColumns();
        return $columns;
    }
}