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
Route::get('master', function () {
    return view('layouts/master');
});
Route::resource('user','UserController');
Route::resource('leads','LeadsController');
Route::resource('contractors','ContractorsController');
Route::resource('prospects','ProspectsController');
Route::resource('areas','AreasController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
