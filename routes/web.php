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

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/', function () {
    return view('home.home');
});

Route::get('/cursos', function () {
    return view('home.cursos');
});

Route::get('/equipe', function () {
    return view('home.equipe');
});

Route::get('/sobre', function () {
    return view('home.sobre');
});

Route::get('/contato', function () {
    return view('home.contato');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
