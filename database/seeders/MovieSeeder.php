<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies') -> insert([
            'title' => 'Edge of Tomorrow',
            'description' => 'With the help of warrior Rita Vrataski, Major William Cage has to save Earth and the human race from an alien species, after being caught in a time loop.',
            'release' => '2014-05-29',
            'length' => 113,
            'mpaa_rating' => 'PG-13',
            'language' => 'English',
            'director' => 'Doug Liman',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movies') -> insert([
            'title' => 'Sicario',
            'description' => 'An idealistic FBI agent is enlisted by a government task force to aid in the escalating war against drugs at the border area between the U.S. and Mexico.',
            'release' => '2015-05-19',
            'length' => 121,
            'mpaa_rating' => 'R',
            'language' => 'English',
            'director' => 'Denis Villeneuve',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('movies') -> insert([
            'title' => 'A Quiet Place',
            'description' => 'In a post-apocalyptic world, a family is forced to live in silence while hiding from monsters with ultra-sensitive hearing.',
            'release' => '2018-03-09',
            'length' => 90,
            'mpaa_rating' => 'PG-13',
            'language' => 'English',
            'director' => 'John Krasinski',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
