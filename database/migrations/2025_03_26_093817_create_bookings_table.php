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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('guest_name');
            $table->string('guest_lastname');
            $table->string('guest_email');
            $table->string('guest_phone', 50);
            $table->string('order_date', 50);
            $table->string('check_in', 50);
            $table->string('check_out', 50);
            $table->string('room_type');
            $table->string('room_number', 50);
            $table->text('special_request');
            $table->timestamps();

            $table->foreign('room_number')->references('number')->on('rooms')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
