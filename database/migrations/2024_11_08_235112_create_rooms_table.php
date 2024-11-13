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

            $table->string('name')->nullable()->unique();
            $table->integer('seat_quantity')->default(15);
            $table->string('image')->default('https://i.pravatar.cc/300')->nullable();
            $table->string('announcement')->nullable();
            $table->string('greetings')->nullable();
            $table->string('status')->default('Active')->nullable();
            $table->boolean('seat_apply_mode')->default(false)->nullable();
            $table->boolean('tourists_on_mic')->default(false)->nullable();
            $table->boolean('tourists_send_text')->default(false)->nullable();
            $table->boolean('tourists_send_files')->default(false)->nullable();
            $table->boolean('hidden_room')->default(false)->nullable();

            $table->timestamps();

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
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
