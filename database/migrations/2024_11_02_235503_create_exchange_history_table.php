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
        Schema::create('exchange_history', function (Blueprint $table) {

            $table->id();
            $table->bigInteger('amount');
            $table->bigInteger('coins_before');
            $table->bigInteger('coins_after');
            $table->bigInteger('diamonds_before');
            $table->bigInteger('diamonds_after');
            $table->timestamps();

            $table->bigInteger('user_id')->unsigned();
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
        Schema::dropIfExists('exchange_history');
    }
};
