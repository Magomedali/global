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




$router->group(['middleware'=>['auth'],'namespace'=>"\App\Http\Controllers"],function($router)  {

	$router->get('/',"SystemController@start");

});


$router->group(['middleware'=>['isAuthed'],'namespace'=>"\App\Http\Controllers"],function($router)  {

	$router->post('/login',"SystemController@login");

	$router->get('/login',"SystemController@login");

	$router->get('/register',"SystemController@register");
	
});




