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
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('room_id')->nullable();

            $table->integer('price')->nullable()->default(0);
            $table->string('name')->nullable()->unique();
            $table->string('background')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('color')->nullable();
            $table->string('text_color')->nullable();
            $table->string('icons_color')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
