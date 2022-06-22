<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call([
            UserSeeder::class,
            TheaterSeeder::class,
            MovieSeeder::class,
            PerformerSeeder::class,
            GenreSeeder::class,
            HallSeeder::class,
            TimeSlotSeeder::class,
            MovieGenreSeeder::class,
            MoviePerformerSeeder::class,
            RatingSeeder::class,
        ]);
    }
}
