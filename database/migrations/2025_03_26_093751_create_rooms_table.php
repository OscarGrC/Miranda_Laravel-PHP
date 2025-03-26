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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('number')->unique();
            $table->enum('type', ['Suite', 'Double Bed', 'Single Bed', 'Double Superior']);
            $table->text('amenities');
            $table->integer('price');
            $table->integer('offert_price');
            $table->boolean('offert');
            $table->boolean('status');
            $table->text('cancelation');
            $table->text('description');
            $table->json('photos');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
