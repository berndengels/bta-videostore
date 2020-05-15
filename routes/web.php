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

// Route::get('/beispiel_formular', function () {
//     // hole view: resources/views/hallo.blade.php
//     $msg = 'Bitte alle Felder ausfüllen!';
//     $options = [
//         1 => 'Paul',
//         2 => 'Lisa',
//         3 => 'Heinrich'
//     ];

//     return view('beispiel_formular', ['message' => $msg, 'options' => $options]);
// });

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/form', 'FormController@form')->name('form');

Route::fallback(function () {
    return redirect()->route('welcome');
});
