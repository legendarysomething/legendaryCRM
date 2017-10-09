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
	
	// Manage Submissions ############################################
	Route::get('test_submissions','TestSubmissionsController@index')->name('admin.test_submissions');

	##################################################################


	// Manage Users ##################################################
	Route::get('manage','ManageUsersController@index')->name('admin.manage');
	Route::get('manage/{id}','ManageUsersController@show');
	// Change User Roles
	Route::patch('manage/{id}','ManageUsersController@update');

	##################################################################

});




// Translations Test Route
Route::get('translationstest', 'TranslationTestController@index')
		->name('translationstest')
		->middleware('role:superadministrator|administrator|applicant');

Route::put('translationstest','TranslationTestController@store');



// Bug Report
Route::get('reportabug', 'ReportBugController@index')->name('reportabug');


// Authentication Routes
Auth::routes();

Route::get('test', function() {
    Storage::disk('fuckyou')->put('test.txt', 'Hello World');
});
