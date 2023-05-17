<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'episode', 'durasi', 'sutradara', 'genre', 'tahun_rilis', 'rating'
    ];
}
