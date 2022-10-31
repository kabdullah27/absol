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
        Schema::create('mt_families', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('family_name', 50);
            $table->foreignUuid('family_relationship_id', 50);
            $table->timestamp('family_date_of_birth')->nullable();
            $table->enum('family_gender', ['male', 'female']);
            $table->string('family_job', 50)->nullable();
            $table->string('family_address', 255)->nullable();
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
        Schema::dropIfExists('mt_families');
    }
};
