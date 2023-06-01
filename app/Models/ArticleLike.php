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
        'articles_id',
        'article_comments_id ',
        'users_id'
    ];
}
