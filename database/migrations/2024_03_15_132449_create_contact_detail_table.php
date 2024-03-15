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
        Schema::create('contactDetails', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('family')->nullable();
            $table->string('phone')->nullable();
            $table->string('telegramID')->nullable();
            $table->string('brokerName')->nullable();
            $table->string('cabinNumber')->nullable();
            $table->text('message')->nullable();
            $table->boolean('isSeen')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactDetails');
    }
};
