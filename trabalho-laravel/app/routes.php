<?php

Route::get('/', 'HomeController@showWelcome');


//Resource() mapeia as URLs de funções RESTful
Route::resource('athlete', 'AthleteController');
Route::resource('sports', 'SportsController');
Route::resource('team', 'TeamController');
Route::resource('city', 'CityController');
Route::resource('users', 'UsersController');

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



Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::route('login');
});

/*

Route::get('/', function()
{
	return View::make('hello');
});
*/

