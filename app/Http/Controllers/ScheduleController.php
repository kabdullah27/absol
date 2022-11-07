<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TxAttendance;
use App\Models\MtSchedule;
use App\Models\MtUploadSchedule;
use Carbon\Carbon;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportSchedule;

class ScheduleController extends Controller
{
    public function index(): View
    {
        $datas = TxAttendance::with('user', 'schedule', 'location_checkin', 'location_checkout', 'user.employee', 'schedule.shift')
            ->whereDate('attendance_date_check_in', '=', date('Y-m-d'))
            ->get();

        $filter_user = $datas->filter(function ($item) {
            return $item->user_id == auth()->user()->id;
        })->first();

        $title = (!$filter_user) ? 'Checkin' : 'Checkout';

        return view('schedule.index', compact('datas', 'title', 'filter_user'));
    }

    public function create(): View
    {
        $user = auth()->user();

        return view('schedule.create', compact('user'));
    }

    public function import_excel(Request $request)
    {
        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder schedule di dalam folder public
        $file->move('schedules', $nama_file);

        DB::beginTransaction();
        try {
            $user = auth()->user();

            $schedule = new MtUploadSchedule();
            $schedule->upload_schedule_date = Carbon::now()->toDateTimeString();
            $schedule->upload_schedule_notes = $request->schedule_upload_notes;
            $schedule->created_by = $user->id;
            $schedule->updated_by = $user->id;
            $schedule->save();

            // import data
            Excel::import(new ImportSchedule($schedule), public_path('/schedules/' . $nama_file));

            DB::commit();
            return redirect()->route('schedule.index')->withSuccess(__('Berhasil Upload') ?? '');
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            return redirect()->back()->withErrors(__('Tidak Berhasil Di Upload') ?? '');
        }
    }
}
