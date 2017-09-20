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



// Home Routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('home', 'HomeController@home')->name('home');


// Admin Only Routes
Route::prefix('admin')->middleware('role:superadministrator|administrator')->group(function(){
	Route::get('manage','ManageUsersController@index')->name('admin.manage');
	Route::get('manage/{id}','ManageUsersController@show');

});


// Translations Test Route
Route::get('translationstest', 'TestController@index')->name('translationstest')->middleware('role:superadministrator|administrator|applicant');



// Route::get('/manage','ManageController@index');

Auth::routes();

