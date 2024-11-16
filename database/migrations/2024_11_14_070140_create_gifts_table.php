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
        Schema::create('gifts', function (Blueprint $table) {
            $table->id();

            $table->string('type');
            $table->string('name', 255)->nullable()->unique();
            $table->bigInteger('price')->nullable();
            $table->string('src_static', 255)->nullable();
            $table->string('src_animated', 255)->nullable();
            $table->decimal('duration')->nullable();

            $table->timestamps();

            $table->bigInteger('user_id')->unsigned()->index()->nullable();
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
        Schema::dropIfExists('gifts');
    }
};
