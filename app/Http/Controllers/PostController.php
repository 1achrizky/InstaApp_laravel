<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'All posts',
            'posts' => Post::latest()->get(), // Post::all(),
        ]);
    }

    public function show(Post $post)
    {
        // return $post;
        return view('post', [
            'title' => 'Single Posts',
            'post' => $post,
        ]);
    }

}
