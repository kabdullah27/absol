<?php

namespace App\Imports;

use App\Models\MtSchedule;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class ImportSchedule implements ToCollection
{
    public function  __construct($data)
    {
        $this->data = $data;
    }

    public function collection(Collection $rows)
    {
        dd($rows);
        foreach ($rows as $row) {
            DB::beginTransaction();
            try {
                $user = User::where('user_code', '=', $row[0])->first();

                $schedule = new MtSchedule();
                $schedule->upload_schedule_id = $this->data->id;
                $schedule->schedule_date = Carbon::now()->toDateTimeString();
                $schedule->shift_id = $row[1];
                $schedule->user_id = $user->id;
                $schedule->created_by = auth()->user()->id;
                $schedule->updated_by = auth()->user()->id;
                $schedule->save();

                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
            }
        }
    }
}
