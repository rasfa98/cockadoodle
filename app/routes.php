<?php

// Views
Route::get('/', 'PagesController@start');
Route::get('/login', 'PagesController@login');

// User resources
Route::resource('/user', 'UsersController');
Route::get('/logout', 'SessionsController@destroy');
Route::post('/login', 'SessionsController@create');

// Logged in
Route::get('/fbver', 'UsersController@facebook');
Route::get(
    '/friends',
    [   'as' => 'friends',
        'uses' => 'FriendsController@index'
    ])->before('auth');
Route::get('/drawingboard', 'DrawingsController@draw');
Route::get('/hidingboard', 'DrawingsController@hide');

// Search friends
Route::get('/api/search', 'FriendsController@search');
//Route::post('/search', 'FriendsController@search')->before('logged_in');

// Api uris
Route::get('/api/facebook_auth', 'UsersController@facebook_external');
Route::get('/api/create_game', 'GamesController@create');
Route::post('/api/save_drawing', 'DrawingsController@create');