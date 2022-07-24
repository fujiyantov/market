<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelCategory extends Model
{
    use HasFactory;

    public function travel()
    {
        return $this->hasMany(Trip::class, 'category');
    }
}
