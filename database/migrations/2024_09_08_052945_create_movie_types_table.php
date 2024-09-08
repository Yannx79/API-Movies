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
        Schema::create('movie_types', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->default('')->nullable();
            $table->unsignedTinyInteger('status')->default(1)->nullable();
            $table->enum('category', config('data.movies.es'))->default(config('data.movies.es')[0])->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_types');
    }
};
