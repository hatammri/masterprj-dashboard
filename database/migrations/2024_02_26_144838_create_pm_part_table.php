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
        Schema::create('pm_part', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pm_id');
            $table->foreign('pm_id')->references('id')->on('pm')->onDelete('cascade');
            $table->foreignId('part_id');
            $table->foreign('part_id')->references('id')->on('part')->onDelete('cascade');
            $table->foreignId('brand_id');
            $table->foreign('brand_id')->references('id')->on('brand')->onDelete('cascade');
            $table->string('num_parts_used');
            $table->string('date_Replacement');
            $table->string('date_Replacement_next');
            $table->string('Allowed_working_hours');
            $table->string('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pm');
    }
};
