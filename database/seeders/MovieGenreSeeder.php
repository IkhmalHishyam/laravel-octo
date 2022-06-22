<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_genres') -> insert([
            'movie_id' => 1,
            'genre_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_genres') -> insert([
            'movie_id' => 1,
            'genre_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_genres') -> insert([
            'movie_id' => 1,
            'genre_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_genres') -> insert([
            'movie_id' => 2,
            'genre_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_genres') -> insert([
            'movie_id' => 2,
            'genre_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_genres') -> insert([
            'movie_id' => 2,
            'genre_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_genres') -> insert([
            'movie_id' => 3,
            'genre_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_genres') -> insert([
            'movie_id' => 3,
            'genre_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movie_genres') -> insert([
            'movie_id' => 3,
            'genre_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
