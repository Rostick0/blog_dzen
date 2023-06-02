<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MainController extends Controller
{
    public function show(): View
    {
        $articles = Article::select(
            'articles.*',
            DB::raw('users.name as user_name'),
            DB::raw('users.avatar as user_avatar')
        )
            ->leftJoin('users', 'users.id', '=', 'articles.users_id')
            ->orderBy('created_at')
            ->paginate(15);

        return view('main', [
            'articles' => $articles
        ]);
    }
}
