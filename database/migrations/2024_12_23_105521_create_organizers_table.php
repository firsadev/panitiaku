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
        Schema::create('organizers', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('name')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->string('loggo')->nullable();
            $table->string('phone')->nullable()->unique();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->foreignId('author_id')->contrained('users')->onDeleteCascade();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizers');
    }
};
