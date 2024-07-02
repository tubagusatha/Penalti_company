<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'url_image',
        'is_featured',
    ];
}
