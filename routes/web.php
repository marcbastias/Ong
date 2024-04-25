<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UneteController;


Route::get('/', function () {
    return view('home');
});

Route::controller(UneteController::class)->group(function () {
    Route::get('/unete/{section}', 'index')->name('unete.index');
});


Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/{post}', 'show')->name('posts.show');
    Route::get('/category/{category}', 'category')->name('posts.category');
    Route::get('/tag/{tag}', 'tag')->name('posts.tag');
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
