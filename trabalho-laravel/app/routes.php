<?php

Route::get('/', 'HomeController@showWelcome');

Route::resource('users', 'UsersController');
//Resource() mapeia as URLs de funções RESTful
Route::resource('athlete', 'AthleteController');
Route::resource('sports', 'SportsController');
Route::resource('team', 'TeamController');
Route::resource('city', 'CityController');

Route::get('/login', [
            'as' => 'login', 
            'uses' => 'SessionsController@create'
]);

Route::get('/logout', [
            'as' => 'logout', 
            'uses'=> 'SessionsController@destroy'
]);

Route::resource('sessions','SessionsController', [
                    'only' => ['create','store','destroy']
]);



/*

Route::get('/', function()
{
	return View::make('hello');
});
*/

