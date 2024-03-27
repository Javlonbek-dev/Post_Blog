<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => BlogPost::take(5)->get()
        ]);
    }
}
