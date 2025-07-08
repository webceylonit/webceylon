<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'main_image',
        'subimage1',
        'subimage2',
        'started_date',
        'completed_date',
        'client',
        'location',
        'type',
        'technologies_used',
    ];

    protected $casts = [
        'started_date' => 'date',
        'completed_date' => 'date',
        'technologies_used' => 'array',
    ];
}
