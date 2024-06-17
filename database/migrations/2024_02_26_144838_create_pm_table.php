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
        Schema::create('pm', function (Blueprint $table) {
            $table->id();
            $table->string('equipment_number');
            $table->foreignId('requestwork_id')->unique();
            $table->foreign('requestwork_id')->references('id')->on('requestwork')->onDelete('cascade');
            $table->foreignId('equipment_id');
            $table->foreign('equipment_id')->references('id')->on('equipment')->onDelete('cascade');
            $table->foreignId('company_id');
            $table->foreign('company_id')->references('id')->on('company')->onDelete('cascade');
            $table->string('equipment_name_Alias');
            $table->string('installation_location');
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
