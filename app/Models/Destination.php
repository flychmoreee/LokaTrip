<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'title',
        'description',
        'gallery',
        'rating',
        'review',
        'location',
        'thumbnail',
        'category',
    ];
}
