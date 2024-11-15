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

            $table->string('name')->nullable()->unique();
            $table->bigInteger('price')->default(0)->nullable();
            $table->string('src_static')->nullable();
            $table->string('src_animated')->nullable();
            $table->integer('bdr_box')->nullable();
            $table->time('active_time')->nullable();
            $table->boolean('status')->default(false);
            $table->dateTime('start_time')->nullable();

            $table->timestamps();

            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
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
