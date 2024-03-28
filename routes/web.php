<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/blogPost', [BlogPostController::class, 'index'])->name('blogPost');
Route::get('/blogPost/{post:slug}', [BlogPostController::class, 'show'])->name('blogPost.show');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
});
