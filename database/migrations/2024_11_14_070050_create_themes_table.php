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

            $table->bigInteger('price')->nullable();
            $table->string('name')->nullable()->unique();
            $table->string('color', 9)->nullable();
            $table->string('text_color', 9)->nullable();
            $table->string('icons_color', 9)->nullable();
            $table->string('background')->default('https://i.pravatar.cc/300')->nullable();
            $table->string('thumbnail')->default('https://i.pravatar.cc/300')->nullable();
            $table->string('seat_ring')->nullable();
            $table->string('seat')->nullable();
            $table->integer('bdr_box')->nullable();
            $table->string('status')->nullable();

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
