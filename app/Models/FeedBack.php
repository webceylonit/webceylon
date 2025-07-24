<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    use HasFactory;
    protected $table = 'feedbacks';
    protected $fillable = [
        'name',
        'designation',
        'company',
        'company_logo',
        'email',
        'contact_number',
        'feedback',
        'status',
    ];
}
