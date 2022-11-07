<?php

namespace App\Http\Livewire\Table;

use Laravolt\Suitable\Columns\Date;
use Laravolt\Suitable\Columns\Numbering;
use Laravolt\Suitable\Columns\Raw;
use Laravolt\Ui\TableView;
use App\Models\MtSchedule as Schedule;

class ScheduleTable extends TableView
{
    public function data()
    {
        return Schedule::with('shift','user','user.employee')->paginate();
    }

    public function columns(): array
    {
        return [
            Numbering::make('No'),
            Raw::make(
                function ($data) {
                    return $data->user->employee->employee_name;
                },
                trans('Nama')
            ),
            Raw::make(
                function ($data) {
                    return $data->shift->shift_name;
                },
                trans('Jam Kerja')
            ),
            Date::make('schedule_date', 'Tanggal Masuk'),
        ];
    }
}
