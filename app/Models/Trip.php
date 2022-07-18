<?php

namespace App\Models;

use App\Models\TripTestimonial;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'village_id',
        'name',
        'price',
        'category',
        'image',
        'address',
        'description',
        'additional_information',
        'seller_name',
        'is_published',
        'video_id',
        'lat',
        'long',
    ];

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    public function gallery()
    {
        return $this->hasMany(TripGallery::class, 'trip_id');
    }

    public function terstimonial()
    {
        return $this->hasMany(TripTestimonial::class, 'trip_id');
    }
}
