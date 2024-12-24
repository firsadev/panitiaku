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
        Schema::create('participant_ticket', function (Blueprint $table) {
            $table->foreignId('participant_id')->contrained()->onDeleteCascade();
            $table->foreignId('ticket_id')->contrained()->onDeleteCascade();
            $table->string('file')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant_ticket');
    }
};
