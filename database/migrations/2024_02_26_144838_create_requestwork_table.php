.<?php

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
        Schema::create('requestwork', function (Blueprint $table) {
            $table->id();
            $table->string('request_number')->unique();
            $table->string('equipment_number');
            $table->foreign('customer')->references('id')->on('customer');
            $table->string('customer');
            $table->foreign('equipment')->references('id')->on('equipment');
            $table->string('equipment');
            $table->foreign('creator')->references('id')->on('operator');
            $table->string('creator');
            $table->string('request_status')->default("IS");
            $table->string('serviceplace')->default(0);
            $table->string('description')->nullable();
            $table->string('estimated_cost');
            $table->string('date_enter');
            $table->string('real_cost');
            $table->string('date_delivery');
            $table->string('Urgency_Work');
            $table->string('date_out');
            $table->string('is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requestwork');
    }
};
