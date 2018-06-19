<?php


$router->group(['namespace'=> "\App\Http\Controllers",'prefix'=>"api/"], function($router){
		
		$router->get('/',"FilmController@list");

		$router->get('/film',"FilmController@list");

		$router->get('/film/{id}',"FilmController@read");

		$router->put('/film',"FilmController@create");

		$router->post('/film/{id}',"FilmController@update");

		$router->delete('/film/{id}',"FilmController@delete");
	}
);