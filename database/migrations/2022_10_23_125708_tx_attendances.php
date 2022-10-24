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
        Schema::create('tx_attendances', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('user_id');
            $table->foreignUuid('schedule_id');
            $table->foreignUuid('location_id_check_in');
            $table->string('attendance_location_name_check_in', 100);
            $table->string('attendance_desc_check_in', 255);
            $table->timestamp('attendance_date_check_in')->nullable();
            $table->string('attendance_long_check_in', 50);
            $table->string('attendance_lat_check_in', 50);
            $table->foreignUuid('location_id_check_out');
            $table->string('attendance_location_name_check_out', 100);
            $table->string('attendance_desc_check_out', 255);
            $table->timestamp('attendance_date_check_out')->nullable();
            $table->string('attendance_long_check_out', 50);
            $table->string('attendance_lat_check_out', 50);
            $table->unsignedBigInteger('created_by');
            $table->timestamps();
            $table->unsignedBigInteger('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tx_attendances');
    }
};
