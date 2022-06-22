<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TimeSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('time_slots') -> insert([
            'd_date' => '2022-06-20',
            'start_time' => '2022-06-20 18:00:00',
            'end_time' => '2022-06-20 20:00:00',
            'movie_id' => 1,
            'hall_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('time_slots') -> insert([
            'd_date' => '2022-06-20',
            'start_time' => '2022-06-20 20:00:00',
            'end_time' => '2022-06-20 23:00:00',
            'movie_id' => 2,
            'hall_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('time_slots') -> insert([
            'd_date' => '2022-06-20',
            'start_time' => '2022-06-20 20:00:00',
            'end_time' => '2022-06-20 22:00:00',
            'movie_id' => 3,
            'hall_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('time_slots') -> insert([
            'd_date' => '2022-06-20',
            'start_time' => '2022-06-20 20:00:00',
            'end_time' => '2022-06-20 23:00:00',
            'movie_id' => 2,
            'hall_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('time_slots') -> insert([
            'd_date' => '2022-06-20',
            'start_time' => '2022-06-20 20:00:00',
            'end_time' => '2022-06-20 22:00:00',
            'movie_id' => 3,
            'hall_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('time_slots') -> insert([
            'd_date' => '2022-06-20',
            'start_time' => '2022-06-20 20:00:00',
            'end_time' => '2022-06-20 23:00:00',
            'movie_id' => 2,
            'hall_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('time_slots') -> insert([
            'd_date' => '2022-06-20',
            'start_time' => '2022-06-20 20:00:00',
            'end_time' => '2022-06-20 22:00:00',
            'movie_id' => 1,
            'hall_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
