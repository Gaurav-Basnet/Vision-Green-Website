<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $table = 'vacancy_sections';

    protected $fillable = [
        't1', 't2', 't3', 't4', 't5',
        't6', 't7', 't8', 't9', 't10',
        'st1', 'st2', 'st3', 'st4', 'st5',
        'st6', 'st7', 'st8', 'st9', 'st10',
        'st13', 'st14',
    ];
}
