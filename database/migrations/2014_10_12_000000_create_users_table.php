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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phonenumber')->unique();
            $table->string('avatar')->default('defult.png');
            $table->integer('is_active')->default(1);
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('login_token')->nullable();
            $table->integer('otp')->nullable();
            $table->foreignId('role_id');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
