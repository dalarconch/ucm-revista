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
    $home=\App\Home::all();
    return view('layouts/landing',compact('home'));
});


Route::resource('homes','Home2Controller');

Route::get('/edini','Home2Controller@index');

Route::get('/inicio', 'Home2Controller@inicio');

Route::get('/hola', 'Home2Controller@edit');





Route::get('/home', 'HomeController@index')->name('home');
