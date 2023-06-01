<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\Articleview;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function show(int $id): View
    {
        $article = Article::select(
            'articles.*',
            DB::raw('users.name as user_name'),
            DB::raw('users.avatar as user_avatar')
        )
            ->leftJoin('users', 'users.id', '=', 'articles.users_id')->find($id);

        if (Auth::check()) {
            Articleview::firstOrCreate([
                'articles_id' => $id,
                'users_id' => Auth::id(),
            ]);
        }

        $comments = ArticleComment::select(
            'article_comments.*',
            DB::raw('users.name as user_name'),
            DB::raw('users.avatar as user_avatar')
        )
            ->leftJoin('users', 'users.id', '=', 'article_comments.users_id')
            ->where('articles_id', $id)
            ->paginate(1);

        // dd($article);

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

        $article_id = Article::insertGetId(
            [
                'users_id' => Auth::id(),
                'title' => $request->title,
                'content' => $request->content,
                'categories_id' => $request->categories_id,
                'image' => $image
            ]
        );

        return redirect('/article/' . $article_id);
    }

    public function show_edit(): View
    {
        return view('article_edit');
    }

    public function store_edit()
    {
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
