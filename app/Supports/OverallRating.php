<?php

namespace App\Supports;

trait OverallRating {

    /**
     * Append Overall Rating into each Collection 
     */
    public function getOverallRating($movie_list)
    {
        foreach($movie_list as $movie)
        {
            // Check if movie has been rated
            if ($movie -> ratings -> count() > 0) 
            {
                // Calculate & Append
                $movie -> Overall_rating = number_format(($movie -> ratings -> sum('rating') / ($movie -> ratings -> count() * 10)) * 10, 1);
            }
            else
            {
                // Append
                $movie -> Overall_rating = 'No Rating';
            }
        }

        return $movie_list;
    }

}