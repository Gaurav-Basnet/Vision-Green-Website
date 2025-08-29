<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
    use HasFactory;

    protected $table = 'terms';

    protected $fillable = [
        // Headings
        'h1','h2','h3','h4','h5','h6','h7','h8','h9','h10',

        // Subheadings
        'sh1','sh2','sh3','sh4','sh5','sh6','sh7','sh8','sh9','sh10',
        'sh11','sh12','sh13','sh14','sh15','sh16','sh17','sh18','sh19','sh20',
        'sh21','sh22','sh23','sh24','sh25','sh26','sh27','sh28','sh29','sh30',
    ];
}
