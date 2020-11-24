<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'UsersController@index')->name('home');
Route::get('/create', 'UsersController@create')->name('create');
Route::get('/edit/{id}', 'UsersController@edit')->name('edit');

Route::post('/register', 'UsersController@store')->name('store');
Route::post('/update/{id}', 'UsersController@update')->name('update');
Route::post('/delete/{id}', 'UsersController@FreeAccess')->name('free-access');
Route::delete('/delete/{id}', 'UsersController@delete')->name('delete');

