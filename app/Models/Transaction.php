<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'type',
        'product_id',
        'trip_id',
        'file',
        'status',
        'grand_total',
        'updated_by',
        'complete_date',
        'is_read',
    ];
}
