<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'new_sections';

    protected $fillable = [
        't1',
        't2',
        't3',
        't4',
        't5',
        'st1',
        'st2',
        'st3',
        'st4',
        'st5',
    ];
}
