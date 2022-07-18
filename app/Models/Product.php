<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

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
        return $this->hasMany(ProductGallery::class, 'product_id');
    }

    public function terstimonial()
    {
        return $this->hasMany(ProductTestimonial::class, 'product_id');
    }
}
