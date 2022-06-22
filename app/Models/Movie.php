<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'release',
        'length',
        'mpaa_rating',
        'language',
        'director',
    ];

    /**
     * Relationship
     */
    public function timeslots()
    {
        return $this -> hasMany(TimeSlot::class, 'movie_id');
    }

    public function genres()
    {
        return $this -> belongsToMany(Genre::class, 'movie_genres');
    }

    public function performers()
    {
        return $this -> belongsToMany(Performer::class, 'movie_performers');
    }

    public function ratings()
    {
        return $this -> hasMany(Rating::class, 'movie_id');
    }
}
