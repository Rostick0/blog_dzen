<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function show(): View
    {
        return view('article');
    }

    public function show_create(): View
    {
        return view('article_create');
    }

    public function store_create(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:255',
            'content' => 'required|min:100|max:65536',
            'categories_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg'
        ]);

        if ($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/upload/image', $fileNameToStore);

            $image = $fileNameToStore;
        }

        Article::create(
            [
                'users_id' => Auth::id(),
                'title' => $request->title,
                'content' => $request->content,
                'categories_id' => $request->categories_id,
                'image' => ($image ?? NULL)
            ]
        );

        return back();
    }

    public function show_edit(): View
    {
        return view('article_edit');
    }

    public function store_edit()
    {
        return back();
    }
}
