<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes http://localhost/ISI2/TP2/public/register
|            http://localhost/ISI2/TP2/public/testformulaire
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

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('films', 'FilmController');
