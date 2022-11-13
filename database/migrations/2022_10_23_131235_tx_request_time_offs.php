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
        Schema::create('tx_request_time_offs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('time_off_user_id')->nullable();
            $table->string('time_off_desc', 100)->nullable();
            $table->date('time_off_start_date');
            $table->date('time_off_end_date');
            $table->foreignUuid('time_off_type_id')->nullable();
            $table->unsignedBigInteger('time_off_pic_id')->nullable();
            $table->jsonb('time_off_line_approve');
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('created_by');
            $table->timestamps();
            $table->unsignedBigInteger('updated_by');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tx_request_time_offs');
    }
};
