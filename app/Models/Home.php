<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    // If your table name is not the plural of the model name, specify it
    protected $table = 'hom_sections';

      use HasFactory;

    protected $fillable = [
        't1', 'st1', 'fst2', 'sst2', 'mst3',
        'icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6',
        't3', 't4', 't5', 't6', 't7', 't8',
        'st3', 'st4', 'st5', 'st6', 'st7', 'st8',
        't9', 'st10', 'st9', 't10', 'st11', 'st12',
        'st13', 'st14', 't11', 'st15',
    ];

    public $timestamps = true;
}
