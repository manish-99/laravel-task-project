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
Route::resource('task','TaskController');
Route::get('/','TaskController@index');
Route::get('/home','TaskController@index');
Route::get('/task.create','TaskController@create');
Route::get('/task.store','TaskController@store');
Route::get('/task.edit','TaskController@edit');
Route::get('/task.update','TaskController@update');
Route::get('/task.destroy','TaskController@destroy');
Route::get('/task.show','TaskController@show');