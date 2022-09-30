<?php

namespace App\Http\Controllers;
// namespace Resources\Views;

use Canvas\Models\Post;
use Canvas\Models\Topic;
use Canvas\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();
        $categories = Topic::all();
        $tags = Tag::all();

        if (request('search')) {
            $posts
            ->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%');

            return view('search', [
                'posts' => $posts->get(),
                'categories' => $categories,
                'tags' => $tags,
            ]);
        } else {
            return view('posts', [
                'posts' => $posts->get(),
                'categories' => $categories,
                'tags' => $tags,
            ]);
        }
    } 

    public function show( Post $post,Tag $tag, Topic $category)
    {

        $posts = Post::latest();

        return view('post', [
            'post' => $post,
            'posts' => $posts->get(),
            'categories' => Topic::all(),
            'tags' => $tags = Tag::all()
        ]); 
    }

}
