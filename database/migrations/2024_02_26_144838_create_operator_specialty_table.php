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
        Schema::create('operator_specialty', function (Blueprint $table) {
            $table->id();
            $table->foreignId('operator_id');
            $table->foreign('operator_id')->references('id')->on('operator')->onDelete('cascade');
            $table->foreignId('specialty_id');
            $table->foreign('specialty_id')->references('id')->on('specialty')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operator_specialty');
    }
};
