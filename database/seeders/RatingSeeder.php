<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings') -> insert([
            'rating' => 8,
            'r_description' => 'Beautiful and action packed!',
            'movie_id' => 1,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('ratings') -> insert([
            'rating' => 9,
            'r_description' => 'Excelent!',
            'movie_id' => 1,
            'user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('ratings') -> insert([
            'rating' => 5,
            'r_description' => 'Could have been better with the ending.',
            'movie_id' => 1,
            'user_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('ratings') -> insert([
            'rating' => 7,
            'r_description' => 'Nice!',
            'movie_id' => 2,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('ratings') -> insert([
            'rating' => 5,
            'r_description' => ' ',
            'movie_id' => 2,
            'user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('ratings') -> insert([
            'rating' => 6,
            'r_description' => 'The soundtracks are marvelous!',
            'movie_id' => 2,
            'user_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('ratings') -> insert([
            'rating' => 8,
            'r_description' => 'Please do sequel!',
            'movie_id' => 3,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('ratings') -> insert([
            'rating' => 6,
            'r_description' => ' ',
            'movie_id' => 3,
            'user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('ratings') -> insert([
            'rating' => 7,
            'r_description' => 'I am thrill!',
            'movie_id' => 3,
            'user_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
