<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index():View
    {
        // dd(auth()->user());
        $datas = \App\Models\TxAttendance::with('user', 'schedule', 'location_checkin','location_checkout', 'user.employee', 'schedule.shift')->get();
        return view('attendance.index', compact('datas'));
    }

    public function create()
    {
        $user = auth()->user();

        $title = 'Checkin';

        return view('attendance.create', compact('user', 'title'));
    }

    public function store(Request $request): RedirectResponse
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();
        dd($request);

        return redirect()->back()->withSuccess(__('Berhasil Checkin') ?? '');
    }
}
