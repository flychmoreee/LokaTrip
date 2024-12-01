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

    protected $casts = [
        'rating' => 'array',
        'review' => 'array',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'destination_user')
            ->withPivot('rating', 'review');
    }
}
