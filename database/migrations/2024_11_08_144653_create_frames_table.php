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
            $table->foreignId('user_id')->nullable();
            $table->foreignId('theme_id')->nullable();

            $table->string('name')->nullable()->unique();
            $table->bigInteger('price')->nullable();
            $table->text('category')->nullable();
            $table->text('status')->nullable();

            $table->string('src_static')->nullable();
            $table->string('src_animated')->nullable();

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
