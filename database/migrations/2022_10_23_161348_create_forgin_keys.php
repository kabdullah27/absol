<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('users', function ($table) {
            $table->foreign('employee_id')->references('id')->on('mt_employees');
        });

        Schema::table('mt_employees', function ($table) {
            $table->foreign('employee_approval_line_id')->references('id')->on('users');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->foreign('bank_account_id')->references('id')->on('mt_bank_accounts');
            $table->foreign('religion_id')->references('id')->on('mt_religions');
            $table->foreign('department_id')->references('id')->on('mt_departments');
            $table->foreign('position_id')->references('id')->on('mt_positions');
            $table->foreign('status_id')->references('id')->on('mt_status');
        });

        Schema::table('tx_attendances', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('schedule_id')->references('id')->on('mt_schedules');
            $table->foreign('location_id_check_in')->references('id')->on('mt_locations');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        Schema::table('mt_locations', function ($table) {
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        Schema::table('mt_schedules', function ($table) {
            $table->foreign('shift_id')->references('id')->on('mt_shifts');
            $table->foreign('holiday_id')->references('id')->on('mt_holidays');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        Schema::table('mt_holidays', function ($table) {
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        Schema::table('mt_shifts', function ($table) {
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        Schema::table('mt_bank_accounts', function ($table) {
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        Schema::table('mt_religions', function ($table) {
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        Schema::table('mt_departments', function ($table) {
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        Schema::table('mt_positions', function ($table) {
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        Schema::table('mt_status', function ($table) {
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        Schema::table('mt_time_off_types', function ($table) {
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        Schema::table('tx_time_off', function ($table) {
            $table->foreign('time_off_pic_id')->references('id')->on('users');
            $table->foreign('time_off_type_id')->references('id')->on('mt_time_off_types');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};
