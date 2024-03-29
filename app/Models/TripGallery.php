<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripGallery extends Model
{
    use HasFactory;

    public function travel()
    {
        return $this->belongsTo(Trip::class, 'trip_id');
    }
}
