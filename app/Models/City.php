<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $guarded = false;

    public function airport()
    {
        return $this->belongsTo(Airport::class);
    }
}
