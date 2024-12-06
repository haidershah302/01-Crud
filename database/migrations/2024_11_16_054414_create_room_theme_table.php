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
        Schema::create('room_theme', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('room_id')->unsigned();
            $table->bigInteger('theme_id')->unsigned();
            $table->boolean('status');

            $table->foreign('room_id')
                ->references('id')
                ->on('rooms')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('theme_id')
                ->references('id')
                ->on('themes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_theme');
    }
};
