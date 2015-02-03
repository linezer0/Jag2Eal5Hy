<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('profile', 'PagesController@profile')->before('customAuth');

// Registration
Route::resource('users', 'UsersController', ['only' => ['index', 'create', 'store', 'destroy']]);

// Authentification
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

// Projections
Route::resource('projections', 'ProjectionsController', ['only' => ['index', 'create', 'store','show', 'destroy']]);

Route::get('/demo', function() {
    return View::make('demo');
});