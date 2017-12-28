<?php

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
Route::get('/movie-api', function () {
    
    return view('movie-api');
});

Route::get('/omdb', function () {
        
    return view('omdb');
});


Route::get('/components', function () {

    return view('components');
    
});

Route::get('/splash', function () {
    return view('splash');
});

Route::get('/signup', function () {
    return view('signup');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('movies', 'MoviesController');
Route::resource('people', 'PeopleController');
Route::resource('genres', 'GenresController');
