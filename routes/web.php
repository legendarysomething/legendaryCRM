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



Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@home')->name('home');


Route::prefix('admin')->group(function(){
	Route::get('/manageusers','ManageUsersController@index')->name('admin.manageusers');

});



// Route::get('/manage','ManageController@index');

Auth::routes();

