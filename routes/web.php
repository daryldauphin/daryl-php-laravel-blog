<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Canvas\Models\Post;
use Canvas\Models\Topic;
use Canvas\Models\Tag;
use Canvas\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

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

Route::get('categories/{category:slug}', function ( Topic $category, Tag $tag, Post $post ){ 
    $posts = Post::latest();
    $categories = Topic::all();
    $tags = Tag::all();

    if (request('search')) {
        $posts
        ->where('title', 'like', '%' . request('search') . '%')
        ->orWhere('body', 'like', '%' . request('search') . '%');

        $tags
        ->where('name', 'like', '%' . request('search') . '%');

        return view('search', [
            'posts' => $posts->get(),
            'categories' => $categories,
            'tags' => $tags,
        ]);
    } else {
    $posts = $category->posts()->paginate(5);

    return view('categories', compact('category', 'posts'));
}});

Route::get('author/{author:username}', function (User $user, Topic $category, Post $post, Tag $tag) { 
    return view('author', [ 
        // 'posts' => $user->posts->load(['category', 'user']),
    ]);
});

Route::get('/all-videos', function (Topic $category, Post $post, Tag $tag) {

    $posts = Post::latest();
    $categories = Topic::all();
    $tags = Tag::all();

    if (request('search')) {
        $posts
        ->where('title', 'like', '%' . request('search') . '%')
        ->orWhere('body', 'like', '%' . request('search') . '%');

        $tags
        ->where('name', 'like', '%' . request('search') . '%');

        return view('search', [
            'posts' => $posts->get(),
            'categories' => $categories,
            'tags' => $tags,
        ]);
    } else {
        return view('all-videos', [
            'posts' => Post::all(),
            'users' => User::all(),
            'categories' => Topic::all(),
        ]);
    }
});

Route::get('/about', function (User $user, Topic $topic, Post $posts, Tag $tag) {
    $posts = Post::latest();
    $categories = Topic::all();
    $tags = Tag::all();

    if (request('search')) {
        $posts
        ->where('title', 'like', '%' . request('search') . '%')
        ->orWhere('body', 'like', '%' . request('search') . '%');

        $tags
        ->where('name', 'like', '%' . request('search') . '%');

        return view('search', [
            'posts' => $posts->get(),
            'categories' => $categories,
            'tags' => $tags,
        ]);
    } else {
        return view('about', [
            'posts' => Post::all(),
            'users' => User::all(),
            'categories' => Topic::all(),
        ]);
    }
});

Route::get('/contact', function (User $user, Topic $topic, Post $posts, Tag $tag) {
    $posts = Post::latest();
    $categories = Topic::all();
    $tags = Tag::all();

    if (request('search')) {
        $posts
        ->where('title', 'like', '%' . request('search') . '%')
        ->orWhere('body', 'like', '%' . request('search') . '%');

        $tags
        ->where('name', 'like', '%' . request('search') . '%');

        return view('search', [
            'posts' => $posts->get(),
            'categories' => $categories,
            'tags' => $tags,
        ]);
    } else {
        return view('contact', [
            'posts' => Post::all(),
            'users' => User::all(),
            'categories' => Topic::all(),
        ]);
    }
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/all-posts', function ( User $user, Topic $topic, Post $posts, Tag $tag ) {
    $posts = Post::latest();
    $categories = Topic::all();
    $tags = Tag::all();

    if (request('search')) {
        $posts
        ->where('title', 'like', '%' . request('search') . '%')
        ->orWhere('body', 'like', '%' . request('search') . '%');

        $tags
        ->where('name', 'like', '%' . request('search') . '%');

        return view('search', [
            'posts' => $posts->get(),
            'categories' => $categories,
            'tags' => $tags,
        ]);
    } else {
        return view('all-posts', [
            'posts' => Post::latest()->paginate(5)->withQueryString(),
            'categories' => Topic::all(),
            'tags' => $tags = Tag::all()
        ]);
    }
});

Route::get('/resources', function (User $user, Topic $topic, Post $posts, Tag $tag) {
    $posts = Post::latest();
    $categories = Topic::all();
    $tags = Tag::all();

    if (request('search')) {
        $posts
        ->where('title', 'like', '%' . request('search') . '%')
        ->orWhere('body', 'like', '%' . request('search') . '%');

        $tags
        ->where('name', 'like', '%' . request('search') . '%');

        return view('search', [
            'posts' => $posts->get(),
            'categories' => $categories,
            'tags' => $tags,
        ]);
    } else {
        return view('resources', [
            'posts' => Post::all(),
            'users' => User::all(),
            'categories' => Topic::all(),
        ]);
    }
});

Route::get('/store', function ( Tag $tag) {
    $categories = Topic::all();

    return view('store', [        
        'categories' => $categories,
        'tags' => $tags = Tag::all()
    ]); 
});