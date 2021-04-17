<?php


Route::get('/', function () {return view('welcome');});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'middleware' => ['admin'],
    'prefix'      => 'dashboard',
    'as'         => 'dashboard.'
], function () {

    Route::get('/', function () {
        return view('dashboard.main');
    });


    // users part routes
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


    // category part routes
    Route::get('/categories', 'Dashboard\CategoryController@index')
    ->name('categories');

    Route::get('/categories/create', 'Dashboard\CategoryController@create')
        ->name('categories.create');

    Route::post('/categories/add', 'Dashboard\CategoryController@add')
        ->name('categories.add');

    Route::get('/categories/edit/{id}', 'Dashboard\CategoryController@edit')
        ->name('categories.edit');
 
    Route::post('/categories/update/{id}', 'Dashboard\CategoryController@update')
        ->name('categories.update');

    Route::get('/categories/delete/{id}', 'Dashboard\CategoryController@destroy')
        ->name('categories.delete');


});
