<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articleview extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'article_views';

    protected $fillable = [
        'articles_id',
        'users_id',
    ];
}
