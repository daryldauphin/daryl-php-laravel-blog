<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();
        $categories = Category::all();

        if (request('search')) {
            $posts
            ->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%');

            return view('search', [
                'posts' => $posts->get(),
                'categories' => $categories
            ]);
        } else {
            return view('posts', [
                'posts' => $posts->get(),
                'categories' => $categories
            ]);
        }
    } 

    public function show( Post $post)
    {
        return view('post', [
            'post' => $post,
            'categories' => Category::all()
        ]); 
    }

}
