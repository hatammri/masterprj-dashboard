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
        Schema::create('operator', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('codemeli')->unique();
            $table->string('semat');
            $table->string('salery');
            $table->string('available');
            $table->string('image');
            $table->string('phonenumber');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operator');
    }
};
