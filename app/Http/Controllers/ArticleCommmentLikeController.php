<?php

namespace App\Http\Controllers;

use App\Models\ArticleCommentLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleCommmentLikeController extends Controller
{
    public function store_create(int $id) {
        $query = ArticleCommentLike::firstOrCreate([
            'article_comments_id' => $id,
            'users_id' => Auth::id()
        ]);

        return back();
    }
}
