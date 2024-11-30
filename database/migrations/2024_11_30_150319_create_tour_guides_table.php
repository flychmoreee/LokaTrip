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
        Schema::create('tour_guides', function (Blueprint $table) {
            $table->id();
            $table->string('image_profile');
            $table->string('name');
            $table->integer('age');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->enum('gender', ['male', 'female']);
            $table->string('language');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_guides');
    }
};