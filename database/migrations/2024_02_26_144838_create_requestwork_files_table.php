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
        Schema::create('requestwork_files', function (Blueprint $table) {
            $table->id();
            $table->foreign('requestwork')->references('id')->on('requestwork');
            $table->string('requestwork');
            $table->string('typefile');
            $table->string('file');
            $table->foreign('creator')->references('id')->on('user');
            $table->string('creator')->nullable();
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
