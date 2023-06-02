<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\ArticleCommentLike;
use App\Models\ArticleLike;
use App\Models\Articleview;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function show(int $id): View
    {
        $article_like = ArticleLike::where([
            'articles_id' => $id,
            'users_id' => Auth::id() ?? 0
        ])->count();

        $article = Article::select(
            'articles.*',
            DB::raw('users.name as user_name'),
            DB::raw('users.avatar as user_avatar'),
            DB::raw($article_like . " as user_like")
        )
            ->leftJoin('users', 'users.id', '=', 'articles.users_id')->find($id);

        if (Auth::check()) {
            Articleview::firstOrCreate([
                'articles_id' => $id,
                'users_id' => Auth::id(),
            ]);
        }

        $article_comment_like = ArticleCommentLike::where([
            'article_comments.id' => 'id',
            'article_comments.users_id' => Auth::id() ?? 0
        ])
            ->select('id')
            ->limit(1);

        $comments = ArticleComment::select(
            'article_comments.*',
            DB::raw('users.name as user_name'),
            DB::raw('users.avatar as user_avatar'),
            DB::raw('article_comment_likes.id as has_like')
        )
            ->leftJoin('users', 'users.id', '=', 'article_comments.users_id')
            ->leftJoin('article_comment_likes', function ($join) {
                $join->on('article_comments.id', '=', 'article_comment_likes.article_comments_id');
                $join->on('article_comment_likes.users_id', '=', DB::raw(Auth::id()));
            })
            // ->leftJoin('article_comment_likes', 'article_comments.id', '=', 'article_comment_likes.article_comments_id')
            ->where('articles_id', $id)
            ->paginate(15);

        return view('article', [
            'article' => $article,
            'comments' => $comments
        ]);
    }

    public function show_create(): View
    {
        $categories = Categories::all();

        return view('article_create', [
            'categories' => $categories
        ]);
    }

    public function store_create(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:255',
            'content' => 'required|min:100|max:65536',
            'categories_id' => 'required',
        ]);

        if ($request->file('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg'
            ]);

            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/upload/image', $fileNameToStore);

            $image = $fileNameToStore;
        }

        $time = NOW();

        $article_id = Article::insertGetId(
            [
                'users_id' => Auth::id(),
                'title' => $request->title,
                'content' => $request->content,
                'categories_id' => $request->categories_id,
                'image' => $image,
                'created_at' => $time,
                'updated_at' => $time
            ]
        );

        return redirect('/article/' . $article_id);
    }

    public function show_edit(int $id)
    {
        $article = Article::find($id);
        $categories = Categories::all();

        if ($article->users_id != Auth::id()) {
            return redirect('/article/' . $article->id);
        }

        return view('article_edit', [
            'article' => $article,
            'categories' => $categories
        ]);
    }

    public function store_edit(int $id, Request $request)
    {
        $article = Article::find($id);

        $request->validate([
            'title' => 'required|min:3|max:255',
            'content' => 'required|min:100|max:65536',
            'categories_id' => 'required',
        ]);

        if ($request->file('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg'
            ]);

            if ($article->image && Storage::exists('public/upload/image' . $article->image)) {
                Storage::delete('public/upload/image' . $article->image);
            }

            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/upload/image', $fileNameToStore);

            $image = $fileNameToStore;
        }

        Article::find($id)
            ->update([
                'title' => $request->title,
                'content' => $request->content,
                'categories_id' => $request->categories_id,
                'image' => $image ?? $article->image,
                'updated_at' => NOW(),
            ]);

        return back();
    }

    public function show_search(Request $request)
    {
        $articles = Article::select(
            'articles.*',
            DB::raw('users.name as user_name'),
            DB::raw('users.avatar as user_avatar')
        )
            ->leftJoin('users', 'users.id', '=', 'articles.users_id')
            ->where('articles.title', 'LIKE', '%' . $request->search . '%')
            ->orderByDesc('created_at')
            ->paginate(15);

        return view('search', [
            'articles' => $articles
        ]);
    }
}
