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
            $table->uuid('uid')->nullable()->unique();

            $table->string('name', 255)->nullable()->unique();
            $table->integer('seat_quantity')->default(15);
            $table->string('image')->default('https://i.pravatar.cc/300')->nullable();
            $table->string('announcement', 255)->nullable();
            $table->string('greetings', 255)->nullable();
            $table->string('status', 255)->default('Active')->nullable();
            $table->boolean('seat_apply_mode')->nullable();
            $table->boolean('tourists_on_mic')->nullable();
            $table->boolean('tourists_send_text')->nullable();
            $table->boolean('tourists_send_files')->nullable();
            $table->boolean('hidden_room')->nullable();

            $table->timestamps();

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
