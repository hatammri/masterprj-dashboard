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
            $table->string('name')->unique();
            $table->foreignId('brand_id');
            $table->foreign('brand_id')->references('id')->on('brand_id');
            $table->foreignId('type_equipment_id');
            $table->foreign('type_equipment_id')->references('id')->on('type_equipment_id');
            $table->string('price');
            $table->string('color');
            $table->string('equipment_security');
            $table->string('weight');
            $table->string('dimensions');
            $table->string('description');
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
