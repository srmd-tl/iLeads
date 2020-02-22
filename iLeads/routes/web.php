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

use Illuminate\Support\Facades\Mail;
use App\Mail\Ileads;
Route::get('mail', function () {
	        Mail::to("sarmad-sohail@hotmail.com")->send(new Ileads());
});
Route::get('master', function () {
    return view('layouts/master');
});
Route::resource('user','UserController');
Route::resource('leads','LeadsController');
Route::resource('contractors','ContractorsController');
Route::resource('prospects','ProspectsController');
Route::resource('areas','AreasController');
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
