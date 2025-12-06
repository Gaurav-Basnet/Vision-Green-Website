<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table='vacanys';

    protected $fillable=[
               'title',
        'employment_type',
        'location',
        'category',
        'experience',
        'description',
        'deadline',
        'education',
        'skills',
    ];


}
