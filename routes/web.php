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
Auth::routes();

Route::get('/', function () {
    // hole view: resources/views/welcome.blade.php
    return view('welcome');
})->name('welcome');

Route::get('/hallo', function () {
    // hole view: resources/views/hallo.blade.php
    $msg = 'Bitte alle Felder ausfüllen!';
    $options = [
        1 => 'Paul',
        2 => 'Lisa',
        3 => 'Heinrich'
    ];

    return view('hallo', ['message' => $msg, 'options' => $options]);
});

Route::get('/test', 'TestController@show')->name('test');
Route::get('/movies', 'TestController@movies')->name('movies');
// hier neue route für movies erstellen mit route 'movie' und action 'TestController@movies'
Route::get('/form', 'FormController@form')->name('form');
Route::post('/send', 'FormController@send')->name('send');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/example', 'ExampleController@show');

// autoren routen
Route::get('/autoren', 'AuthorController@index')->name('autoren');
Route::get('/autor/{id}', 'AuthorController@show')->name('autor');

// movie routen
Route::get('/movies', 'MovieController@index')->name('movies');
Route::get('/movie/{movie}', 'MovieController@show')->name('movie');
Route::get('/movie/create', 'MovieController@create')->name('movie.create');
Route::get('/movie/edit/{movie}', 'MovieController@edit')->name('movie.edit');
Route::post('/movie/store', 'MovieController@store')->name('movie.store');
Route::post('/movie/update/{movie}', 'MovieController@update')->name('movie.update');
Route::get('/movie/destroy/{movie}', 'MovieController@destroy')->name('movie.destroy');

//Route::resource('MovieResource');

Route::fallback(function(){
    return redirect()->route('welcome');
});
