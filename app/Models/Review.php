<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rating',
        'comment',
        'car_id',
    ];

    public function horror()
    {
        return $this->belongsTo(Horror::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
