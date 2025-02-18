<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Airport extends Model
{
    protected $table = 'airports';
    protected $guarded = false;

    public function departures()
    {
        return $this->hasMany(Flight::class, 'departure_airport_id');
    }

    public function arrivals()
    {
        return $this->hasMany(Flight::class, 'arrival_airport_id');
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
