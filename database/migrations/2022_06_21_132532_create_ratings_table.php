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
        Schema::create('ratings', function (Blueprint $table) {
            $table -> id() -> unique();
            $table -> integer('rating');
            $table -> string('r_description') -> nullable();
            $table -> timestamps();

            // FK
            $table -> foreignId('movie_id') -> constrained('movies') -> onUpdate('cascade') -> onDelete('cascade');
            $table -> foreignId('user_id') -> constrained('users') -> onUpdate('cascade') -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
};
