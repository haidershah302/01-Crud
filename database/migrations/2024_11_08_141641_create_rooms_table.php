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
            $table->uuid('uid')->unique()->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

//            $table->unsignedBigInteger('room_themes_id');
//            $table->foreign('room_themes_id')
//                ->references('id')
//                ->on('room_themes')
//                ->onDelete('cascade');

            $table->string('room_name')->default('Fly Room')->nullable();
            $table->bigInteger('gift_interactions')->default(0)->nullable();
            $table->integer('allowed_seats')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
