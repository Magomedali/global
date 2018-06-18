<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->group(['namespace'=> "\App\Http\Controllers",'middleware'=>['auth']], function($router){
		
		$router->get('/',"FilmController@list");

		$router->get('/film',"FilmController@list");

		$router->get('/film/{id}',"FilmController@read");

		$router->put('/film',"FilmController@create");

		$router->post('/film/{id}',"FilmController@update");

		$router->delete('/film/{id}',"FilmController@delete");
	}
);



$router->get('/signup',"SystemController@signup");

