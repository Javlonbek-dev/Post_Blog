<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {

        $featuredPosts = Cache::remember('featuredPosts', now()->addDay(), function () {
            return BlogPost::published()->featured()->with('categories')->latest('published_at')->take(3)->get();
        });

        $latestPosts = Cache::remember('latestPosts', now()->addDay(), function () {
            return BlogPost::published()->with('categories')->latest('published_at')->take(9)->get();
        });

        return view('home', [
            'featuredPosts' => $featuredPosts,
            'latestPosts' => $latestPosts
        ]);
    }
}
