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

//PROJECT(Welcome page)

Route::get('/about','HomeController@about');
Route::get('/help','HomeController@help');

//PROJECT(User page)
Route::group(['middleware' => ['auth']],function(){
	Route::get('/home', 'HomeController@index');
	Route::get('/addUnit','HomeController@addTry');
	Route::get('/cancel','HomeController@index');
	Route::get('/addProcess','HomeController@addingPro');
	Route::get('/update/{id}','HomeController@upDate');
	Route::get('/saveProcess/{id}','HomeController@save');
	Route::get('/deleteUnit/{id}','HomeController@delete');
});
