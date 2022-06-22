<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating',
        'r_description',

        // FK
        'movie_id',
        'user_id'
    ];

    /**
     * Relationship
     */
    public function movie()
    {
        return $this -> belongsTo(Movie::class, 'movie_id');
    }

    public function user()
    {
        return $this -> belongsTo(User::class, 'user_id');
    }
}
