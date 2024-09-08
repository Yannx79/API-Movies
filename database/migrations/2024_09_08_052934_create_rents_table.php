<?php

use Carbon\Carbon;
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
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->date('rent_date')->default(Carbon::now())->nullable();
            $table->date('return_date')->default(Carbon::now()->addDays(7))->nullable();
            $table->float('penalty', 2)->default(0)->nullable();
            $table->float('rent_value', 2)->default(0)->nullable();
            $table->unsignedSmallInteger('quantity')->default(1)->nullable();
            $table->unsignedTinyInteger('status')->default(1)->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('cassette_id')
                ->nullable()
                ->references('id')
                ->on('cassettes')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            $table->unsignedBigInteger('user_id')
                ->nullable()
                ->references('id')
                ->on('users')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rents');
    }
};
