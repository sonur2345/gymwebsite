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
        Schema::create('trials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('adv_name');
            $table->bigInteger('mobile_num');
            $table->date('trial_date');
            $table->string('gender');
            $table->string('Description')->nullable();
            $table->string('trial_serv');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trials');
    }
};
