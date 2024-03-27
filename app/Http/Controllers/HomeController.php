<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('home', [
            'featurePost'=>BlogPost::published()->featured()->latest('published_at')->take(3)->get(),
            'latestPost'=>BlogPost::published()->latest('published_at')->take(6)->get(),
        ]);
    }
}
