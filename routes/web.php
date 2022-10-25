<?php

use App\Http\Controllers\Home;

Route::redirect('/', 'auth/login');

Route::middleware(['auth', 'verified'])
    ->group(
        function () {
            Route::get('/home', Home::class)->name('home');

            // Attendance
            Route::get('attendance', [\App\Http\Controllers\AttendanceController::class, 'index'])->name('attendance.index');
            Route::get('attendance/create', [\App\Http\Controllers\AttendanceController::class, 'create'])->name('attendance.create');
            Route::post('attendance', [\App\Http\Controllers\AttendanceController::class, 'store'])->name('attendance.store');
        }
    );

include __DIR__.'/auth.php';
include __DIR__.'/my.php';
