<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'thumbnail',
        'location',
        'google_maps',
        'category',
        'open',
        'close',
        'facilities',
    ];
}
