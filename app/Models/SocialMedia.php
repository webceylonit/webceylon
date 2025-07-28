<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $fillable = [
        'facebook', 'instagram', 'linkedin', 'youtube', 'tiktok','whatsapp','email', 'contact'
    ];
}
