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
    Schema::create('emergencies', function (Blueprint $table) {
    $table->id();
    $table->foreignId('ambulance_id')->constrained();
    $table->string('type'); // e.g., 'heart attack', 'accident'
    $table->text('description')->nullable();
    $table->timestamp('reported_at')->useCurrent();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergencies');
    }
};
