<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MoviePerformerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_performers') -> insert([
            'movie_id' => 1,
            'performer_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_performers') -> insert([
            'movie_id' => 1,
            'performer_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_performers') -> insert([
            'movie_id' => 1,
            'performer_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_performers') -> insert([
            'movie_id' => 2,
            'performer_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_performers') -> insert([
            'movie_id' => 2,
            'performer_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_performers') -> insert([
            'movie_id' => 2,
            'performer_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_performers') -> insert([
            'movie_id' => 3,
            'performer_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_performers') -> insert([
            'movie_id' => 3,
            'performer_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_performers') -> insert([
            'movie_id' => 3,
            'performer_id' => 7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
