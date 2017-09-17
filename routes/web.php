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


Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/logtest', function () {
    return view('pages.login');
});

Route::get('/fpwtest', function () {
    return view('auth.passwords.reset');
});


// Route::get('/manage','ManageController@index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
