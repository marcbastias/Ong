<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\FormMessagesController;

Route::get('/', [AdminHomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update', 'create', 'store'])->names('admin.users');

Route::get('/perfil', [UserController::class, 'perfil'])->name('perfil');

Route::delete('users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('tags', TagController::class)->except('show')->names('admin.tags');

Route::resource('posts', PostController::class)->except('show')->names('admin.posts');

Route::get('/forms', [FormMessagesController::class, 'index'])->name('admin.forms.index');

Route::get('/forms/job', [FormMessagesController::class, 'job'])->name('admin.forms.job');  

Route::get('/forms/attention', [FormMessagesController::class, 'attention'])->name('admin.forms.socio');  

Route::get('/forms/help', [FormMessagesController::class, 'help'])->name('admin.forms.help');  

Route::get('/forms/otherQuery', [FormMessagesController::class, 'otherQueries'])->name('admin.forms.otherQuery');  
// Rutas relacionadas con el manejo de currículums
Route::get('/download-cv/{id}', [FormMessagesController::class, 'downloadCV'])->name('download.cv');
