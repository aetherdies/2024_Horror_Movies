<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Horror extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'year',
        'image',
        'created_at',
        'updated_at',
    ];
}
