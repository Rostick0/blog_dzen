<?php

namespace App\Http\Controllers;

use App\Models\ArticleLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleLikeController extends Controller
{
    public function store_create(int $article_id) {
        ArticleLike::firstOrCreate([
            'articles_id' => $article_id,
            'users_id' => Auth::id()
        ]);
    }
}
