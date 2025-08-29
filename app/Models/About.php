<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
     use HasFactory;

    protected $table = 'about_sections'; // Table name

    // Fields that can be mass-assigned
    protected $fillable = [
        't1', 't2', 't3', 't4', 't5', 't6',
        't7', 't8', 't9', 't10', 't11', 't12',
        't13', 't14', 't15', 't16', 't17', 't18', 't19',
        'st1', 'st2', 'st3', 'st4', 'st5', 'st6',
        'st7', 'st8', 'st9', 'st10', 'st11', 'st12',
        'st13', 'st14', 'st15', 'st16', 'st17', 'st18',
    ];

    public $timestamps = false;
}


