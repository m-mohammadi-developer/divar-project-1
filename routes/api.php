<?php


Route::get('/posts', [
    'as'    => 'posts.all',
    'uses' => 'Api\PostController@index'
]);


Route::get('/posts/self', [
    'as'    => 'posts.self',
    'uses' => 'Api\PostController@self'
]);

Route::post('/posts/create', [
    'as'    => 'posts.store',
    'uses' => 'Api\PostController@store'
]);


Route::post('/login', "Api\Auth\LoginController@login");


Route::get('/refresh', [
    'as'    => 'login.refresh',
    'uses'  => 'Api\Auth\LoginController@refresh'
]);