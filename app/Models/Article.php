<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'content',
        'categories_id',
        'users_id',
        'count_likes',
        'count_views',
    ];
}
