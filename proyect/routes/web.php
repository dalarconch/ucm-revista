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

Auth::routes();

Route::get('/asd', function () {
    return view('layouts/canvas');
});

Route::get('/dsa', function () {
    return view('layouts/travis');
});

Route::get('/aaa', function () {
    return view('layouts/landing');
});



Route::get('/home', 'HomeController@index')->name('home');
