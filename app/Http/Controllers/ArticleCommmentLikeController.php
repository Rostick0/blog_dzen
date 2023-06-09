<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\ArticleCommentLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleCommmentLikeController extends Controller
{
    public function store_create(int $id)
    {
        $query = ArticleCommentLike::firstOrCreate([
            'article_comments_id' => $id,
            'users_id' => Auth::id()
        ]);

        return back();
    }

    public function store_delete(int $id)
    {
        $query = ArticleCommentLike::where([
            'article_comments_id' => $id,
            'users_id' => Auth::id()
        ]);

        $query->delete();

        return back();
    }
}
