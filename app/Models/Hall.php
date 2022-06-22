<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $fillable = [
        'hall_no',

        // FK
        'theater_id',
    ];

    /**
     * Relationship
     */
    public function timeslots()
    {
        return $this -> hasMany(TimeSlot::class, 'hall_id');
    }

    public function theater()
    {
        return $this -> belongsTo(Theater::class, 'theater_id');
    }
}
