<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourGuides extends Model
{
    protected $table = 'tour_guide';
    protected $fillable = ['nama', 'whatsapp', 'instagram', 'foto'];
}
