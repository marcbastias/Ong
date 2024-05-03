<?php

use App\Http\Controllers\PrivacidadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UneteController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\InformateController;




Route::get('/auth/{provider}/redirect', [SocialController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [SocialController::class, 'callback']);

Route::get('/', function () {
    return view('front-client.home');
});

Route::get('/somos', function () {
    return view('front-client.somos');
});

Route::get('/contacto', 'ContactoController@index')->name('contacto.index');
Route::controller(UneteController::class)->group(function () {
    Route::get('/unete/{section}', 'index')->name('unete.index');
});


Route::controller(UneteController::class)->group(function () {
    Route::get('/unete/{section}', 'index')->name('unete.index');
});

Route::controller(PrivacidadController::class)->group(function () {
    Route::get('/privacidad/politica-privacidad', 'privacy')->name('privacidad.policy');
    Route::get('/privacidad/terminos-condiciones', 'terms')->name('privacidad.terminos-condiciones');
    Route::get('/privacidad/cookies', 'cookies')->name('privacidad.cookies');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/{post}', 'show')->name('posts.show');
    Route::get('/category/{category}', 'category')->name('posts.category');
    Route::get('/tag/{tag}', 'tag')->name('posts.tag');
});


Route::controller(InformateController::class)->group(function () {
    Route::get('/informate/newsletter', 'index')->name('informate.index');
});

Route::get('/informate/blog', function () {
});

Route::get('/informate/contacta', function () {
});

Route::get('/trabajo/especies', function () {
});

Route::get('/trabajo/voluntariado', function () {
});

Route::get('/colabora/adopta', function () {
});

Route::get('/colabora/donaciones', function () {
});

Route::get('/colabora/animales-amenazados', function () {
});

Route::get('/colabora/animales-explotados', function () {
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
