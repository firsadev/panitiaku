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
        Schema::create('participants', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_member')->default(false);
            $table->foreignId('user_id')->contrained()->onDeleteCascade()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
