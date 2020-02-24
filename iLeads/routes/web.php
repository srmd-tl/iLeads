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

Route::get('plan', function () {
    return "Plan Page";
})->name('plan');
Auth::routes(['verify' => true]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('layouts/master');
    })->name('home');
    Route::resource('user', 'UserController');
    Route::resource('leads', 'LeadsController');
    Route::resource('contractors', 'ContractorsController');
    Route::resource('prospects', 'ProspectsController');
    Route::resource('areas', 'AreasController');

});
