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
        Schema::create('movie_performers', function (Blueprint $table) {
            $table -> id() -> unique();
            $table -> timestamps();

            // FK
            $table -> foreignId('movie_id') -> constrained('movies') -> onUpdate('cascade') -> onDelete('cascade');
            $table -> foreignId('performer_id') -> constrained('performers') -> onUpdate('cascade') -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_performers');
    }
};
