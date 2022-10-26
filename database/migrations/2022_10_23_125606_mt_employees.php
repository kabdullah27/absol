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
        Schema::create('mt_employees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('employee_name', 30);
            $table->unsignedBigInteger('employee_approval_line_id')->nullable();
            $table->string('employee_identity_type', 10)->nullable();
            $table->string('employee_identity_number', 50)->unique();
            $table->string('employee_npwp', 50)->unique();
            $table->string('employee_bpjs', 50)->unique();
            $table->string('employee_bpjstk', 50)->unique();
            $table->foreignUuid('bank_account_id', 50);
            $table->string('employee_bank_account_number', 50);
            $table->string('employee_place_of_birth', 50)->nullable();
            $table->timestamp('employee_date_of_birth');
            $table->foreignUuid('religion_id');
            $table->string('employee_address', 255);
            $table->string('employee_handphone_number', 30);
            $table->string('employee_gender', 10);
            $table->string('employee_marital_status', 10)->nullable();
            $table->foreignUuid('department_id');
            $table->foreignUuid('position_id');
            $table->timestamp('employee_join_date');
            $table->timestamp('employee_end_date')->nullable();
            $table->foreignUuid('status_id');
            $table->string('employee_path_img', 255)->nullable();
            $table->string('employee_img', 50)->nullable();
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
        Schema::dropIfExists('mt_employees');
    }
};
