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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedTinyInteger('status')->default(1)->nullable();

            $table->unsignedBigInteger('actor_id')
                ->nullable()
                ->refereces('id')
                ->on('actors')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            $table->unsignedBigInteger('movie_type_id')
                ->nullable()
                ->references('id')
                ->on('movie_types')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
