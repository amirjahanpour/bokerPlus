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
        Schema::create('tagPosts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tagID');
            $table->unsignedInteger('postID');
            $table->boolean('showIndex')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagPosts');
    }
};
