<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.   php artisan migrate
     */
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id(); // Autoincremental ID
            $table->enum('type', ['surf', 'windsurf', 'kayak', 'atv', 'hot air balloon']); // Enum para el tipo de actividad
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign Key a la tabla users
            $table->dateTime('datetime'); // Fecha y hora de la actividad
            $table->boolean('paid')->default(false); // Pagado (por defecto es false)
            $table->text('notes')->nullable(); // Notas (puede ser nulo)
            $table->integer('satisfaction')->nullable()->default(null); // Satisfacción, de 0 a 10, nullable
            $table->timestamps(); // Timestamps (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
