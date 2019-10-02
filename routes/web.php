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
//URL::forceSchema('https');

Route::get('/', function () {
    return view('welcome');
});




Route::Group(['middleware' => ['auth']], function() {

	Route::resource('input','InputController');

	Route::resource('toets','ToetsController')->middleware('admin');


});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
