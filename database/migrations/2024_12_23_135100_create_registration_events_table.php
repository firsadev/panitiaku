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
        Schema::create('registration_events', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('ticket_id')->contrained()->onDeleteCascade();
            $table->foreignId('participant_id')->contrained()->onDeleteCascade();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_events');
    }
};
