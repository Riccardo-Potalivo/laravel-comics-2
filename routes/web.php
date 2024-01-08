<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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
    // return redirect(comics);
    // return redirect()->route('comics.index');
    return view('home');
});

// comics resource route

Route::resource('comics', ComicController::class);


// movies

Route::get('/movies', function () {
    $movies = config('db.movies');
    return view('movies.index', compact('movies'));
})->name('movies.index');

Route::get('/movies/{id}', function ($id) {
    $movies = config('db.movies');
    $movie = null;
    foreach ($movies as $item) {
        if ($item['id'] == $id) {
            $movie = $item;
        }
    }
    if ($movie) {
        return view('movies.show', compact('movie'));
    }
})->name('movies.show');
