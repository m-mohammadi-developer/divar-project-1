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

Route::get('/', function () {return view('welcome');});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



Route::group([
    'middleware' => ['admin'],
    'prefix'      => 'dashboard',
    'as'         => 'dashboard.'
], function () {


    Route::get('/users', 'Dashboard\UserController@index')
    ->name('users');

    Route::get('/users/edit/{id}', 'Dashboard\UserController@edit')
        ->name('users.edit');

    Route::post('/users/update/{id}', 'Dashboard\UserController@update')
        ->name('users.update');

    Route::post('/users/update-password/{id}', 'Dashboard\UserController@updatePassword')
        ->name('users.update-pass');

    Route::get('/users/delete/{id}', 'Dashboard\UserController@destroy')
        ->name('users.delete');


});


