<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'author',
        'date',
        'category',
        'tags',
        'description',
        'main_image',
        'subimage1',
        'subimage2',
    ];

    protected $casts = [
        'date' => 'date',
        'tags' => 'array', 
    ];
}
