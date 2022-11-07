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
        Schema::create('mt_upload_schedules', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('upload_schedule_date');
            $table->string('upload_schedule_notes')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->timestamps();
            $table->unsignedBigInteger('updated_by');
            $table->softDeletes();
        });

        Schema::table('mt_schedules', function (Blueprint $table) {
            $table->foreignUuid('upload_schedule_id')->nullable()->after('id')->index();
            $table->foreign('upload_schedule_id')->references('id')->on('mt_upload_schedules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mt_upload_schedules');

        Schema::table('mt_schedules', function (Blueprint $table) {
            $table->dropColumn(['upload_schedule_id']);
        });
    }
};
