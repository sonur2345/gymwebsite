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
        Schema::create('add_plantenures', function (Blueprint $table) {
            $table->id('id');
            $table->string('tenure_name',255);
            $table->string('tenure_Surfix');
            $table->bigInteger('tenure_amount')->nullable();
            $table->integer('tenure_duration');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_plantenures');
    }
};
