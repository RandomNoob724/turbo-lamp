<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category; 
use App\Models\User;

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

Route::get('/', [PostController::class, 'index'], function () {})->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show'],function() {});

Route::get('categories/{category:slug}', [PostController::class, 'postByCategory'], function() {});

Route::get('authors/{author:username}', function(User $author){
    return view('posts', [
        'posts' => $author->posts->load(['category', 'author'])
    ]);
});