<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SongController;

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

// Homepagina Route
Route::get('/', function () {
    return view('welcome');
});

//Routes voor Genres en Songs
Route::resource('genres', GenreController::class);
Route::resource('songs', SongController::class);

//Route voor het tonen van Songs per Genre
Route::get('/genres/{genre}/songs', [GenreController::class, 'showSongsByGenre'])->name('genres.songs');

// voor andere paginas
Route::get('/another-page', function () {
    return view('another-page');
});
