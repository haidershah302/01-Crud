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
        Schema::create('frames', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('theme_id');

            $table->string('name')->nullable()->unique();
            $table->bigInteger('price')->nullable();
            $table->longText('description')->nullable();
            $table->text('category')->nullable();
            $table->text('status')->nullable();
            $table->string('src')->nullable();
            $table->text('bdr_box')->nullable();
            $table->text('size')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frames');
    }
};
