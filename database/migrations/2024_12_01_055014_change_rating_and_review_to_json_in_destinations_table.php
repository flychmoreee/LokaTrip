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
        Schema::table('destinations', function (Blueprint $table) {
            $table->json('rating')->nullable()->change();
            $table->json('review')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('destinations', function (Blueprint $table) {
            $table->float('rating')->nullable()->change();
            $table->integer('review')->nullable()->change();
        });
    }
};
