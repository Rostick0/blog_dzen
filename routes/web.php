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

Route::get('/login', [UserController::class, 'show_login'])->name('login');

Route::post('/login', [UserController::class, 'store_login']);

Route::get('/register', [UserController::class, 'show_register'])->name('register');

Route::post('/register', [UserController::class, 'store_register']);

Route::get('/profile/{id}', [UserController::class, 'show_profile'])->name('profile');

Route::get('/profile/edit', [UserController::class, 'show_profile_edit'])->name('profile_edit')->middleware('auth');

Route::post('/profile/edit', [UserController::class, 'store_profile_edit'])->name('profile_edit')->middleware('auth');

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article');

Route::get('/article/create', [ArticleController::class, 'show_create'])->name('article_create')->middleware('auth');

Route::post('/article/create', [ArticleController::class, 'store_create'])->middleware('auth');

Route::get('/article/edit', [ArticleController::class, 'show_edit'])->name('article_edit')->middleware('auth');

Route::post('/article/edit', [ArticleController::class, 'store_edit'])->name('article_create')->middleware('auth');

Route::post('/like', [ArticleLikeController::class, 'store_create'])->middleware('auth');

Route::post('/like/comment', [ArticleCommmentLikeController::class, 'store_create'])->middleware('auth');

Route::post('/comment', [ArticleCommentController::class, 'store_create'])->middleware('auth');
