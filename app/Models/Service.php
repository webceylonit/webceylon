<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'technologies',
        'additional_info',
    ];

    protected $casts = [
        'technologies' => 'array', 
    ];
}
