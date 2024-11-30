<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;
    protected $fillable = [
        'name',  
        'email',
        'password',
        'google_id',
        'profile_picture',
        'role_id',
        'remember_token',
    ];
}
