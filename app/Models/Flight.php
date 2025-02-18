<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'flights';
    protected $guarded = false;

    public function departureAirport()
    {
        return $this->belongsTo(Airport::class, 'departure_airport_id');
    }

    public function arrivalAirport()
    {
        return $this->belongsTo(Airport::class, 'arrival_airport_id');
    }

    public function schedules()
    {
        return $this->hasMany(FlightSchedule::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
