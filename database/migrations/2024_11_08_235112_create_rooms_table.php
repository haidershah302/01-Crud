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
            $table->foreignId('user_id')->constrained('users');

            $table->string('name')->nullable()->unique();
            $table->integer('seat_quantity')->nullable()->default(15);
            $table->string('image')->nullable();
            $table->string('announcement')->nullable();
            $table->string('greetings')->nullable();
            $table->string('status')->default('Active')->nullable();

            $table->boolean('seat_apply_mode')->nullable()->default(False);
            $table->boolean('tourists_on_mic')->nullable()->default(False);
            $table->boolean('tourists_send_text')->nullable()->default(False);
            $table->boolean('tourists_send_files')->nullable()->default(False);
            $table->boolean('hidden_room')->nullable()->default(False);

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
