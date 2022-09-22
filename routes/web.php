<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']); 



Route::get('categories/{category:slug}', function (Category $category){ 
    return view('categories',[
        'posts' => $category->posts->load(['category', 'author']),
        'categories' => Category::all()

    ]);
});

Route::get('author/{author:username}', function (User $author) { 
    return view('author', [ 
        // 'posts' => $author->posts->load(['category', 'author']),
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/all-posts', function ( Category $category, Post $post ) {
    return view('all-posts', [ 
        'posts' => Post::latest()->paginate(5)->withQueryString(),
        'categories' => Category::all()
    ]);
});
