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
            $table->string('tmdb_id')->unique();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('original_title');
            $table->string('poster_path')->nullable();
            $table->integer('runtime')->nullable();
            $table->text('overview');
            $table->bigInteger('popularity');
            $table->integer('vote_average');
            $table->BigInteger('vote_count');
            $table->string('status')->default('Released');
            $table->string('tagline')->nullable();
            $table->integer('budget');
            $table->integer('revenue');
            $table->boolean('adult')->default(0);
            $table->timestamp('release_date');
            $table->timestamps();
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
