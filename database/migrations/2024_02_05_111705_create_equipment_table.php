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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('brand_id');
            $table->foreign('brand_id')->references('id')->on('brand_id');
            $table->string('Price');
            $table->string('Color');
            $table->string('Equipment_security');
            $table->string('Equipment_weight');
            $table->string(  'Equipment_dimensions');
            $table->string(  'description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
