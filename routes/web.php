<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index']);
Route::get('/kategori/create', [App\Http\Controllers\KategoriController::class, 'create']);
Route::post('/kategori', [App\Http\Controllers\KategoriController::class, 'store']);
Route::get('/kategori/{id}/edit', [App\Http\Controllers\KategoriController::class, 'edit']);
Route::patch('/kategori/{id}', [App\Http\Controllers\KategoriController::class, 'update']);
Route::delete('/kategori/{id}', [App\Http\Controllers\KategoriController::class, 'destroy']);

Route::get('/post', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('/post', [App\Http\Controllers\PostController::class, 'store']);
Route::get('/post/{id}/edit', [App\Http\Controllers\PostController::class, 'edit']);
Route::patch('/post/{id}', [App\Http\Controllers\PostController::class, 'update']);
Route::delete('/post/{id}', [App\Http\Controllers\PostController::class, 'destroy']);

Route::get('/photo', [App\Http\Controllers\PhotoController::class, 'index']);
Route::get('/photo/create', [App\Http\Controllers\PhotoController::class, 'create']);
Route::post('/photo', [App\Http\Controllers\PhotoController::class, 'store']);
Route::get('/photo/{id}/edit', [App\Http\Controllers\PhotoController::class, 'edit']);
Route::patch('/photo/{id}', [App\Http\Controllers\PhotoController::class, 'update']);
Route::delete('/photo/{id}', [App\Http\Controllers\PhotoController::class, 'destroy']);

Route::get('/album', [App\Http\Controllers\AlbumController::class, 'index']);
Route::get('/album/create', [App\Http\Controllers\AlbumController::class, 'create']);
Route::post('/album', [App\Http\Controllers\AlbumController::class, 'store']);
Route::get('/album/{id}/edit', [App\Http\Controllers\AlbumController::class, 'edit']);
Route::patch('/album/{id}', [App\Http\Controllers\AlbumController::class, 'update']);
Route::delete('/album/{id}', [App\Http\Controllers\AlbumController::class, 'destroy']);
