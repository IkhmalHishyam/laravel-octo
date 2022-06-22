<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;

    protected $fillable = [
        'd_time',
        'start_time',
        'end_time',

        // FK
        'movie_id',
        'hall_id',
    ];

    /**
     * Relationship
     */
    public function movie()
    {
        return $this -> belongsTo(Movie::class, 'movie_id');
    }

    public function hall()
    {
        return $this -> belongsTo(Hall::class, 'hall_id');
    }
}
