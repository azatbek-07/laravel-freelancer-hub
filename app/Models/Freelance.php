<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Freelance extends Model
{
    protected $fillable = [
        'name',
        'job',
        'image',
        'rating',
        'reviews',
        'skills',
        'description',
        'projects',
        'experience',
        'success',
        'price',
        'color',
        'status',
    ];

    protected $casts = [
        'skills' => 'array',
        'rating' => 'decimal:1',
    ];
}