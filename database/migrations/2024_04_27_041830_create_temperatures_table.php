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
        Schema::create('temperatures', function (Blueprint $table) {
            $table->id();
            $table->decimal('temperature', 5, 2); // Agrega el campo moist_quality
            $table->timestamp('created_at')->default(now()); // Fecha actual cuando se crea el registro
            $table->timestamp('updated_at')->default(now()); // Fecha actual cuando se actualiza el registro
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temperatures');
    }
};
