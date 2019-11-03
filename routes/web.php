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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
	return view('pages.homepage');
});

Route::get('/home', function () {
	return view('pages.homepage-with-effect');
});

Route::get('/create-project', function () {
	return view('pages.create-project');
});

// Route::get('/', 'TasksPottrController@index');
// Route::get('/create-project', 'TasksPottrController@index');
