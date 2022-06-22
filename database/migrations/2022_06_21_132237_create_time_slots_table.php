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
        Schema::create('time_slots', function (Blueprint $table) {
            $table -> id() -> unique();
            $table -> date('d_date') -> nullable();
            $table -> timestamp('start_time') -> nullable();
            $table -> timestamp('end_time') -> nullable();
            $table -> timestamps();

            // FK
            $table -> foreignId('movie_id') -> constrained('movies') -> onUpdate('cascade') -> onDelete('cascade');
            $table -> foreignId('hall_id') -> constrained('halls') -> onUpdate('cascade') -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_slots');
    }
};
