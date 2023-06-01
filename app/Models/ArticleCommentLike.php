<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCommentLike extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'article_comment_likes';

    protected $fillable = [
        'article_comments_id ',
        'users_id'
    ];
}
