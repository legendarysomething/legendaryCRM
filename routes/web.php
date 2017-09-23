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
	
	// Manage Submissions ########################################
	Route::get('test_submissions','TestSubmissionsController@index')->name('admin.test_submissions');


	// Manage Users #################################################
	Route::get('manage','ManageUsersController@index')->name('admin.manage');
	Route::get('manage/{id}','ManageUsersController@show');
	// Change User Roles

});


// Translations Test Route
Route::get('translationstest', 'TranslationTestController@index')
		->name('translationstest')
		->middleware('role:superadministrator|administrator|applicant');




Auth::routes();


// Authentication Routes... for reference
// $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
// $this->post('login', 'Auth\LoginController@login');
// $this->post('logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// $this->post('register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset');
