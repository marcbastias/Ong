<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ColaboraController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\PrivacidadController;
use App\Http\Controllers\InformateController;
use Illuminate\Support\Facades\Route;

// Rutas para autenticación social
Route::get('/auth/{provider}/redirect', [SocialController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [SocialController::class, 'callback']);

// Rutas para páginas estáticas
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/somos', 'front-client.somos');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.index');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');



// Rutas para la sección de Privacidad
Route::prefix('privacidad')->group(function () {
    Route::get('/politica-privacidad', [PrivacidadController::class, 'privacy'])->name('privacidad.policy');
    Route::get('/terminos-condiciones', [PrivacidadController::class, 'terms'])->name('privacidad.terms');
    Route::get('/cookies', [PrivacidadController::class, 'cookies'])->name('privacidad.cookies');
});

// Rutas para la sección "Informate"
Route::prefix('informate')->group(function () {
    Route::get('/newsletter', [InformateController::class, 'index'])->name('informate.newsletter');
    Route::view('/blog', 'front-client.informate.blog');
    Route::view('/contacta', 'front-client.informate.contacta');
});

// Rutas para la sección "Trabajo"
Route::prefix('trabajo')->group(function () {
    Route::view('/especies', 'front-client.trabajo.especies');
    Route::view('/voluntariado', 'front-client.trabajo.voluntariado');
});
Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/{post}', 'show')->name('posts.show');
    Route::get('/category/{category}', 'category')->name('posts.category');
    Route::get('/tag/{tag}', 'tag')->name('posts.tag');
});
// Rutas para la sección "Colabora"
Route::prefix('colabora')->group(function () {
    Route::get('/adopta', [ColaboraController::class, 'adopta'])->name('colabora.adopta');
    Route::get('/animalesAmenazados', [ColaboraController::class, 'animalesAmenazados'])->name('colabora.animalesAmenazados');
    Route::get('/animalesExplotados', [ColaboraController::class, 'animalesExplotados'])->name('colabora.animalesExplotados');
});

// Ruta de Dashboard
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
