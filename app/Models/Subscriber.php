<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'interests',
        'consent',
    ];

    // Cast interests as array for easy handling
    protected $casts = [
        'interests' => 'array',
        'consent' => 'boolean',
    ];
}
