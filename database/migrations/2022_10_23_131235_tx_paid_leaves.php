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
        Schema::create('tx_paid_leaves', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('paid_leave_desc', 100);
            $table->timestamp('paid_leave_date');
            $table->uuid('paid_leave_type_id')->nullable();
            $table->integer('paid_leave_pic_id');
            $table->jsonb('paid_leave_line_approve');
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
        Schema::dropIfExists('tx_paid_leaves');
    }
};
