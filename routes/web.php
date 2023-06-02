<?php

use App\Http\Controllers\ArticleCommentController;
use App\Http\Controllers\ArticleCommmentLikeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleLikeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'show'])->name('main');

Route::get('/search', [ArticleController::class, 'show_search'])->name('search');

Route::get('/login', [UserController::class, 'show_login'])->name('login');

Route::post('/login', [UserController::class, 'store_login']);

Route::get('/register', [UserController::class, 'show_register'])->name('register');

Route::post('/register', [UserController::class, 'store_register']);

Route::get('/profile/{id}', [UserController::class, 'show_profile'])->name('profile');

Route::get('/profile_edit', [UserController::class, 'show_profile_edit'])->name('profile_edit')->middleware('auth');

Route::post('/profile_edit', [UserController::class, 'store_profile_edit'])->middleware('auth');
Route::post('/password_edit', [UserController::class, 'store_password_edit'])->name('password_edit')->middleware('auth');

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article');

Route::get('/article_create', [ArticleController::class, 'show_create'])->name('article_create')->middleware('auth');

Route::post('/article_create', [ArticleController::class, 'store_create'])->middleware('auth');

Route::get('/article_edit/{id}', [ArticleController::class, 'show_edit'])->name('article_edit')->middleware('auth');

Route::post('/article_edit/{id}', [ArticleController::class, 'store_edit'])->middleware('auth');

Route::post('/like/{article_id}', [ArticleLikeController::class, 'store_create'])->name('like_create')->middleware('auth');
Route::post('/like_delete/{article_id}', [ArticleLikeController::class, 'store_delete'])->name('like_delete')->middleware('auth');

Route::post('/like/comment/{id}', [ArticleCommmentLikeController::class, 'store_create'])->name('like_comment_create')->middleware('auth');

Route::post('/like_delete/comment/{id}', [ArticleCommmentLikeController::class, 'store_delete'])->name('like_comment_delete')->middleware('auth');

Route::post('/comment/{articles_id}', [ArticleCommentController::class, 'store_create'])->name('comment_create')->middleware('auth');
