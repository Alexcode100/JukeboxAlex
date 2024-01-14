<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistController;
use Illuminate\Support\Facades\Auth;


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
    return view('auth.login');
});

//Routes voor Genres en Songs
Route::resource('genres', GenreController::class);
Route::resource('songs', SongController::class);
Route::get('playlists', [PlaylistController::class, 'showAddForm']);
Route::post('/add-playlist', [PlaylistController::class, 'add']);

//Route voor het tonen van Songs per Genre
Route::get('/genres/{genre}/songs', [GenreController::class, 'showSongsByGenre'])->name('genres.songs');

// voor andere paginas
Route::get('/another-page', function () {
    return view('another-page');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// For showing a playlist and its songs
Route::get('/playlist/{id}', [PlaylistController::class, 'show']);
Route::post('/add-songs-to-playlist', [PlaylistController::class, 'addSongsToPlaylist']);

Route::post('/update-playlist/{id}', [PlaylistController::class, 'update'])->name('playlists.update');

Route::get('/playlists/{id}', [PlaylistController::class, 'show'])->name('playlists.show');

Route::post('/playlists/{playlist}/songs/{song}/delete', [PlaylistController::class, 'deleteSongFromPlaylist'])->name('playlists.songs.delete');
