<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    use HasFactory;
    protected $table = 'article_comments';

    protected $fillable = [
        'content',
        'is_author_like',
        'count_likes',
        'articles_id',
        'content',
        'users_id'
    ];
}
