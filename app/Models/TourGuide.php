<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourGuide extends Model
{
    protected $fillable = [
        'image_profile',
        'name',
        'age',
        'email',
        'phone',
        'address',
        'gender',
        'language',
        'location',
    ];
}
