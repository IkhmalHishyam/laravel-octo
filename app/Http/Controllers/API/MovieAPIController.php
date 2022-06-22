<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Rating;
use App\Models\Performer;
use Illuminate\Http\Request;
use App\Supports\OverallRating;
use App\Http\Controllers\Controller;

class MovieAPIController extends Controller
{
    // Supports
    use OverallRating;

    /**
     * View - Get movie list based on genre
     */
    public function viewMovieGenre(Request $request)
    {
        // Get movie list
        $movie_list = Movie::whereHas('genres', function($query) use($request){
            // Check genre name
            return $query -> where('name', 'LIKE', '%' .  $request -> genre . '%');
        })
        -> get();

        return response() -> json([
            'name' => 'Genre',
            'status' => true,
            'message' => 'Succesfully retrieved movies based on genre : ' . $request -> genre . '.',
            'data' => $movie_list,
        ], 200);
    }

    /**
     * View - Get movie list based on time slot & theater
     */
    public function viewMovieTimeSlot(Request $request)
    {
        // Get movie list
        $movie_list = Movie::whereHas('timeslots', function($query) use($request){
            // Check timeslot time
            return $query -> whereBetween('start_time', [$request -> time_start, $request -> time_end])
            -> whereBetween('end_time', [$request -> time_start, $request -> time_end])
            -> whereHas('hall', function($query2) use($request){
                return $query2 -> whereHas('theater', function($query3) use($request){
                    // Check theater name
                    return $query3 -> where('name', 'LIKE', '%' .  $request -> theater_name . '%');
                });
            });
        })
        // Get timeslot, hall & theater data that has been filtered for each movie 
        -> with('timeslots', function($query) use($request){
            return $query -> whereBetween('start_time', [$request -> time_start, $request -> time_end])
            -> whereBetween('end_time', [$request -> time_start, $request -> time_end])
            -> whereHas('hall', function($query2) use($request){
                return $query2 -> whereHas('theater', function($query3) use($request){
                    return $query3 -> where('name', 'LIKE', '%' .  $request -> theater_name . '%');
                });
            }) -> with('hall', 'hall.theater');
        })
        -> get();

        return response() -> json([
            'name' => 'TimeSlot',
            'status' => true,
            'message' => 'Succesfully retrieved movies based on theater : ' . $request -> theater_name . ', start time : ' . $request -> time_start . ' & end time : ' . $request -> time_end . '.',
            'data' => $movie_list,
        ], 200);
    }

    /**
     * View - Get movie list based on theater & date
     */
    public function viewMovieTheater(Request $request)
    {
        // Get movie list
        $movie_list = Movie::whereHas('timeslots', function($query) use($request){
            // Check timeslot date
            return $query -> whereDate('d_date', $request -> d_date)
            -> whereHas('hall', function($query2) use($request){
                return $query2 -> whereHas('theater', function($query3) use($request){
                    // Check theater name
                    return $query3 -> where('name', 'LIKE', '%' .  $request -> theater_name . '%');
                });
            });
        })
        // Get timeslot, hall & theater data that has been filtered for each movie 
        -> with('timeslots', function($query) use($request){
            return $query -> whereDate('d_date', $request -> d_date)
            -> whereHas('hall', function($query2) use($request){
                return $query2 -> whereHas('theater', function($query3) use($request){
                    return $query3 -> where('name', 'LIKE', '%' .  $request -> theater_name . '%');
                });
            }) -> with('hall', 'hall.theater');
        })
        -> get();

        return response() -> json([
            'name' => 'Specific Movie Theater',
            'status' => true,
            'message' => 'Succesfully retrieved movies based on theater : ' . $request -> theater_name . ' & date : ' . $request -> d_date . '.',
            'data' => $movie_list,
        ], 200);
    }

    /**
     * View - Get movie list based on performer
     */
    public function viewMoviePerformer(Request $request)
    {
        // Get movie list
        $movie_list = Movie::whereHas('performers', function($query) use($request){
            // Check performer name
            return $query -> where('name', 'LIKE', '%' . $request -> performer_name . '%');
        })
        -> get();

        return response() -> json([
            'name' => 'Search Performer',
            'status' => true,
            'message' => 'Succesfully retrieved movies based on performer : ' . $request -> performer_name . '.',
            'data' => $this -> getOverallRating($movie_list),
        ], 200);
    }

    /**
     * Store - Add new rating on a movie
     */
    public function storeMovieRating(Request $request)
    {
        // Store rating data into DB
        $rating_data = Rating::create([
            'rating' => $request -> rating,
            'r_description' => $request -> r_description ?? 'None',
            'movie_id' => Movie::where('title', 'LIKE', '%' . $request -> movie_title . '%') -> first(['id']) -> id,
            'user_id' => User::where('username', 'LIKE', '%' . $request -> username . '%') -> first(['id']) -> id,
        ]);

        return response() -> json([
            'name' => 'Give Rating',
            'status' => true,
            'message' => 'Successfully added review for ' . $rating_data -> movie -> title . ' by user : ' . $rating_data -> user -> username . '.',
        ], 200);
    }

    /**
     * View - Get movie based on date
     */
    public function viewMovieDate(Request $request)
    {
        // Get movie list
        $movie_list = Movie::whereDate('release', '<=', $request -> r_date)
        -> get();

        return response() -> json([
            'name' => 'New Movies',
            'status' => true,
            'message' => 'Successfully retrieved movie based on date : ' . $request -> r_date . '.',
            'data' => $this -> getOverallRating($movie_list),
        ], 200);
    }

    /**
     * Store - Add new movie include genre & performer
     */
    public function storeMovie(Request $request)
    {
        // Store movie data into DB
        $movie_data = Movie::create($request -> all());

        $movie_data -> refresh();

        // Store every new genre into DB
        foreach($request -> genre as $genre)
        {
            $genreData = Genre::firstOrCreate(['name' => $genre], ['name' => $genre]);

            $genreData -> movies() -> attach($movie_data -> id);
        }

        // Store every new performer into DB
        foreach($request -> performer as $performer)
        {
            $performerData = Performer::firstOrCreate(['name' => $performer], ['name' => $performer]);

            $performerData -> movies() -> attach($movie_data -> id);
        }

        return response() -> json([
            'name' => 'Add Movie',
            'status' => true,
            'message' => 'Successfully added movie ' . $movie_data -> title . ' with Movie_ID ' . $movie_data -> id . '.',
        ], 200);
    }
}
