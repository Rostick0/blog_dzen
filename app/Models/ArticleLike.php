<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleLike extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'article_likes';

    protected $fillable = [
        'is_author_like',
        'article_comments_id ',
        'users_id'
    ];
}
