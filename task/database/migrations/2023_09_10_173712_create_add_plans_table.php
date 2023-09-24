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
        Schema::create('add_plans', function (Blueprint $table) {
            $table->id('id');
            $table->string('pakage_name');
            $table->string('services');
            $table->string('comp_name');
            $table->integer('comp_duration');
            $table->bigInteger('plan_price');
            $table->unsignedBigInteger('fk_tenure_id')->constraint();
            $table->foreign('fk_tenure_id')->references('id')->on('add_plantenures');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_plans');
    }
};
