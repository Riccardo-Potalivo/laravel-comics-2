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
    // return redirect(comics);
    // return redirect()->route('comics.index');
    return view('home');
});

// comics

Route::get('/comics', function () {
    $comics = config('db.comics');
    return view('comics.index', compact('comics'));
})->name('comics.index');

Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');
    $comic = null;
    foreach ($comics as $item) {
        if ($item['id'] == $id) {
            $comic = $item;
        }
    }
    if ($comic) {
        return view('comics.show', compact('comic'));
    }
})->name('comics.show');

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
