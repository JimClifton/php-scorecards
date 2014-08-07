<?php

//Temp Routes
Route::get('/', function() {
	return View::make('Home');
});

Route::get('profile', function() {
	return View::make('Profile');
})->before('auth');


//Protected Routes
Route::group(array('before' => 'auth'), function() {
	Route::resource('courses', 'TemplatesController');
	Route::resource('scorecards', 'ScorecardsController');
});


//Guest Routes
Route::resource('users', 'UsersController', ['only' => ['index', 'create', 'store']]);
Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'store', 'destroy']]);


// Shortcuts/aliases
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::get('register', 'UsersController@create');