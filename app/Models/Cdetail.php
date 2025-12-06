<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cdetail extends Model
{
    protected $table = 'cdetails';
    protected $fillable = ['email','email2','email3','email4', 'phone_number', 'address', 'pan_number', 'swc_number', 'reg_number',];
}
