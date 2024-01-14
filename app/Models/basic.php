<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    use HasFactory;

    protected $fillable =  [
        'name',
        'last_name',
        'phone_number',
        'street_number',
        'city',
        'country'
    ];
}
