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
Route::get('/', 'HomeController@index')->name('home');

// author routen
Route::name('author.')
    ->prefix('author')
    ->group(function ($route) {
        $route->get('/create', 'AuthorController@create')
            ->name('create')
//            ->middleware('auth')
        ;
        $route->post('/store', 'AuthorController@store')
            ->name('store')
//            ->middleware('auth')
        ;
        $route->get('/edit/{author}', 'AuthorController@edit')
            ->name('edit')
//            ->middleware('auth')
        ;
        $route->post('/update/{author}', 'AuthorController@update')
            ->name('update')
//            ->middleware('auth')
        ;
        $route->get('/destroy/{author}', 'AuthorController@destroy')
            ->name('destroy')
//            ->middleware('auth')
        ;
        $route->get('/list', 'AuthorController@index')->name('list');
        $route->get('/autor/{author}', 'AuthorController@show')->name('show');
    });

// movie routen
Route::name('movie.')
    ->prefix('movie')
    ->group(function ($route) {
        $route->get('/create', 'MovieController@create')->name('create')->middleware('auth');
        $route->post('/store', 'MovieController@store')->name('store')->middleware('auth');
        $route->get('/edit/{movie}', 'MovieController@edit')->name('edit')->middleware('auth');
        $route->get('/destroy/{movie}', 'MovieController@destroy')->name('destroy')->middleware('auth');
        $route->post('/update/{movie}', 'MovieController@update')->name('update')->middleware('auth');
        $route->get('/list', 'MovieController@index')->name('list');
        $route->get('/{movie}', 'MovieController@show')->name('show');
});
//Route::resource('MovieResource', 'MovieResourceController');

Route::fallback(function() {
    return redirect()->route('home');
});
