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
            $table->foreignId('operator');
            $table->foreign('operator')->references('id')->on('operator')->onDelete('cascade');
            $table->foreignId('specialty');
            $table->foreign('specialty')->references('id')->on('specialty')->onDelete('cascade');
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
