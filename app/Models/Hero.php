<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = ['name', 'description', 'hero_image', 'card_title', 'card_image'];
}
