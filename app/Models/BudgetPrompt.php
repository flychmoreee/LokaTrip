<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BudgetPrompt extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'prompt'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}