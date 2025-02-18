<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlightSchedule extends Model
{
    protected $fillable = [
        'flight_id',
        'departure_time',
        'arrival_time',
        'day_of_week',
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
