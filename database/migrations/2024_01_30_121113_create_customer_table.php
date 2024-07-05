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
        Schema::defaultStringLength(191);
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phonenumber')->unique();
            $table->string('description');
            $table->foreignId('company');
            $table->foreign('company')->references('id')->on('company');
            $table->foreignId('post');
            $table->foreign('post')->references('id')->on('role');
            $table->foreignId('role');
            $table->foreign('role')->references('id')->on('role');
            $table->integer('allow_access_system')->default(1);
            $table->string('login_token')->nullable();
            $table->integer('otp')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
