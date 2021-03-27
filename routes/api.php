<?php





// Route::post('/login', "Api\Auth\AuthController@login");


// Route::get('/refresh', [
//     'as'    => 'login.refresh',
//     'uses'  => 'Api\Auth\AuthController@refresh'
// ]);

Route::group([

    'middleware' => 'api',
    // 'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'Api\Auth\AuthController@login')->name('api.login');
    Route::post('register', 'Api\Auth\AuthController@register')->name('api.register');
    Route::post('logout', 'Api\Auth\AuthController@logout')->name('api.logout');
    Route::post('refresh', 'Api\Auth\AuthController@refresh')->name('api.refresh');
    Route::post('me', 'Api\Auth\AuthController@me')->name('api.user');

    Route::post('user/adverses', "Api\AdversController@userAdverses")->name('user.adverses');

    Route::post('advers/create', "Api\AdversController@store")->name('advers.create');

});