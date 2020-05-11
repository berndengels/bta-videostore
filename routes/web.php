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
    return view('welcome', [
        'info' => 'Hier kommt der Info Text ...',
    ]);
});
Route::get('/test', function () {
    return view('test', [
        'info' => 'Hier kommt der Info Text ...',
    ]);
});

Route::get('/home', 'HomeController@index')->name('home');
