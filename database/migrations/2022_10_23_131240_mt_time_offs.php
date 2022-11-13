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
        Schema::create('mt_time_offs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('time_off_user_id')->nullable();
            $table->integer('time_off_total')->nullable();
            $table->string('time_off_desc', 100)->nullable();
            $table->date('time_off_start_date')->nullable();
            $table->date('time_off_end_date')->nullable();
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
        Schema::dropIfExists('mt_time_offs');
    }
};
