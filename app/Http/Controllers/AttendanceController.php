<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TxAttendance;
use App\Models\MtSchedule;
use Carbon\Carbon;

class AttendanceController extends Controller
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

        return view('attendance.index', compact('datas', 'title', 'filter_user'));
    }

    public function create(): View
    {
        $user = auth()->user();

        $datas = TxAttendance::whereDate('attendance_date_check_in', '=', date('Y-m-d'))
            ->where('user_id', $user->id)
            ->first();

        $title = (!$datas) ? 'Checkin' : 'Checkout';

        return view('attendance.create', compact('user', 'title'));
    }

    public function store(Request $request): RedirectResponse
    {
        $user = auth()->user();
        $data_attendance = TxAttendance::whereDate('attendance_date_check_in', '=', date('Y-m-d'))
            ->where('user_id', $user->id)
            ->first();

        $title = (!$data_attendance) ? 'Checkin' : 'Checkout';

        $date_schedule = MtSchedule::whereDate('schedule_date', '=', date('Y-m-d'))
            ->where('user_id', $user->id)
            ->first();
            DB::beginTransaction();
        try {
            if ($data_attendance) {
                $attendance = TxAttendance::find($data_attendance->id);
                $attendance->location_id_check_out = $request->location;
                $attendance->attendance_desc_check_out = $request->notes;
                $attendance->attendance_date_check_out = Carbon::now()->toDateTimeString();
                $attendance->attendance_long_check_out = $request->long;
                $attendance->attendance_lat_check_out = $request->lat;
                $attendance->updated_by = $user->id;
                $attendance->updated_at = Carbon::now()->toDateTimeString();
                $attendance->save();
            } else {
                $attendance = new TxAttendance;
                $attendance->user_id = $user->id;
                $attendance->schedule_id = (isset($date_schedule->id))?$date_schedule->id:'27e67bf0-17e8-4653-a3eb-2e6440c2e7aa';
                $attendance->location_id_check_in = $request->location;
                $attendance->attendance_desc_check_in = $request->notes;
                $attendance->attendance_date_check_in = Carbon::now()->toDateTimeString();
                $attendance->attendance_long_check_in = $request->long;
                $attendance->attendance_lat_check_in = $request->lat;
                $attendance->created_by = $user->id;
                $attendance->updated_by = $user->id;
                $attendance->save();
            }

            DB::commit();
            return redirect()->route('attendance.index')->withSuccess(__('Berhasil ' . $title) ?? '');
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            return redirect()->back()->withErrors(__('Tidak Berhasil ' . $title) ?? '');
        }
    }
}
