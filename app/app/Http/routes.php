<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('/', 'FrontController@index');
Route::post("auth/verify/", "FrontController@verification_data");

Route::group(['prefix' => 'home', 'namespace' => '\admin', 'middleware' => 'auth'], function() {

    // Rutas del usuario
    Route::get('/', 'UserController@dashboard');

    // Rutas de las Categorias
    Route::resource('category', 'CategoryController',
                    ['only' => ['index', 'create', 'store']]);

    // Rutas de las Palabras
    Route::resource('word', 'WordController',
                    ['only' => ['index']]);
});
