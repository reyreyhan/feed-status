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

Route::get('/home', 'HomeController@index');
Route::post('/home/profile', 'HomeController@store');
Route::get('/home/profile', 'HomeController@profile');
Route::get('/home/profile/edit', 'HomeController@edit');
Route::put('/home/profile/edit', 'HomeController@update');

Route::get('/home/status/create', 'StatusController@create');
Route::post('/home/status/create', 'StatusController@store');
Route::get('/home/status/delete/{id}','HomeController@delete');