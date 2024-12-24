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
        Schema::create('tickets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('prefix_code')->unique();
            $table->string('name')->nullable();
            $table->string('template')->nullable();
            $table->float('price')->default(0.00);
            $table->bigInteger('capacity')->default(0);
            $table->string('description')->nullable();
            $table->foreignId('event_id')->contrained('events')->onDeleteCascade();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
