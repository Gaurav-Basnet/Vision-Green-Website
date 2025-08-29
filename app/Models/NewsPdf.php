<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsPdf extends Model
{
    use HasFactory;

    // Table name (optional if following Laravel convention)
    protected $table = 'newspdfs';

    // Mass assignable fields
    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'pdf',
    ];


}
