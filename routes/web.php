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

Route::group(['middleware' => ['auth']], function () {
	Route::get('/home', 'HomeController@index')->name('home')->middleware('registered');

	Route::get('logout', function() {
		Auth::logout();
		return redirect()->back();
	});
	
	Route::get('meeting/{id}', 'HomeController@meeting');
	Route::get('event/{id}','HomeController@event');
	
	Route::group(['middleware' => ['check.role']], function() {
		Route::resource('user', 'UserController', ['except' => ['show']]);
		Route::get('user/delete/account/{user_id}','UserController@destroy')->name('user.delete');
	});
	
	// Route::get('table-list', function () {
	// 	return view('pages.table_list');
	// })->name('table');

	// Route::get('typography', function () {
	// 	return view('pages.typography');
	// })->name('typography');

	// Route::get('icons', function () {
	// 	return view('pages.icons');
	// })->name('icons');

	// Route::get('map', function () {
	// 	return view('pages.map');
	// })->name('map');

	// Route::get('notifications', function () {
	// 	return view('pages.notifications');
	// })->name('notifications');

	// Route::get('rtl-support', function () {
	// 	return view('pages.language');
	// })->name('language');

	// Route::get('upgrade', function () {
	// 	return view('pages.upgrade');
	// })->name('upgrade');
});
