<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('mem_Name')->nullable();
            $table->unsignedBigInteger('fk_pakage_id')->constraint();
            $table->foreign('fk_pakage_id')->references('id')->on('add_plans');
            $table->bigInteger('mem_number')->nullable();
            $table->string('mem_gender')->nullable();
            $table->string('mem_marid_statuss')->nullable();
            $table->string('mem_email')->nullable();
            $table->date('mem_dob')->nullable();
            $table->date('mem_date_join')->nullable();
            $table->string('mem_pan_num')->nullable();
            $table->bigInteger('mem_aadhar')->nullable();
            $table->string('mem_address')->nullable();
            $table->boolean('mem_status');
            $table->time('st_check_in')->nullable();
            $table->time('st_check_out')->nullable();
            $table->time('sp_m_check_in')->nullable();
            $table->time('sp_m_check_out')->nullable();
            $table->time('sp_e_check_in')->nullable();
            $table->time('sp_e_check_out')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
