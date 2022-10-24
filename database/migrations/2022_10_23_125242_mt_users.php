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
        Schema::create('mt_users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('user_code', 30);
            $table->string('name', 30);
            $table->string('password', 100);
            $table->timestamp('password_changed_at')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignUuid('employee_id')->nullable();
            $table->boolean('is_active')->default(true);
            $table->rememberToken();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('modifed_by')->nullable();
            $table->string('timezone')->default(config('app.timezone'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mt_users');
    }
};
