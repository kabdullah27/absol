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
        Schema::create('tx_time_offs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('time_off_desc', 100)->nullable();
            $table->timestamp('time_off_date');
            $table->uuid('time_off_type_id')->nullable();
            $table->integer('time_off_pic_id');
            $table->jsonb('time_off_line_approve');
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('tx_time_offs');
    }
};
