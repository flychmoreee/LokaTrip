<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'google_id',
        'profile_picture',
        'role_id',
        'remember_token',
    ];

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}
