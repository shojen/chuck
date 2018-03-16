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

Route::get('/', 'FrontController@index');

//Auth::routes();
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login');
Route::post('logout','Auth\LoginController@logout')->name('logout');



Route::group(['prefix' => 'dashboard','middleware'=>'auth'], function() {
	Route::get('/', 'DashboardController@index')->name('dashboard');
	Route::get('frases','DashboardController@create');
	Route::post('frases','DashboardController@store');
	Route::get('frases/edit/{phrase}','DashboardController@edit');
	Route::put('frases/edit/{phrase}', 'DashboardController@update');
	Route::delete('/frases/{phrase}','DashboardController@destroy');    
});

