<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_genres', function (Blueprint $table) {
            $table -> id() -> unique();
            $table -> timestamps();

            // FK
            $table -> foreignId('movie_id') -> constrained('movies') -> onUpdate('cascade') -> onDelete('cascade');
            $table -> foreignId('genre_id') -> constrained('genres') -> onUpdate('cascade') -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_genres');
    }
};
