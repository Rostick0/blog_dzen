<?php

namespace App\Http\Controllers;

use App\Models\ArticleComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleCommentController extends Controller
{
    public function store_create(int $articles_id, Request $request)
    {
        $request->validate([
            'content' => 'min:5|max:1024'
        ]);

        ArticleComment::create([
            'content' => $request->content,
            'articles_id' => $articles_id,
            'users_id' => Auth::id(),
        ]);

        return back();
    }
}
