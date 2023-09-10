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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('Emp_Name')->nullable();
            $table->date('Emp_dob')->nullable();
            $table->integer('Emp_age')->nullable();
            $table->bigInteger('Emp_number')->nullable();
            $table->bigInteger('Emp_alt_number')->nullable();
            $table->string('Emp_gender')->nullable();
            $table->string('Emp_marid_statuss')->nullable();
            $table->string('Emp_email')->nullable();
            $table->string('Emp_role')->nullable();
            $table->date('Emp_date_join')->nullable();
            $table->string('Emp_pan_num')->nullable();
            $table->string('Emp_salary')->nullable();
            $table->integer('Emp_no_leave')->nullable();
            $table->bigInteger('Emp_aadhar')->nullable();
            $table->string('Emp_address')->nullable();
            $table->boolean('Emp_status');
            $table->time('st_check_in')->nullable();
            $table->time('st_check_out')->nullable();
            $table->time('sp_m_check_in')->nullable();
            $table->time('sp_m_check_out')->nullable();
            $table->time('sp_e_check_in')->nullable();
            $table->time('sp_e_check_out')->nullable();
            $table->time('la_m_check_in_out')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
