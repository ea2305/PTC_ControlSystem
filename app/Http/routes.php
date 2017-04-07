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

//Inicio de la aplicación, Acceso de usuarios
Route::get('/', function () {
    return view('welcome');
});

//Inicio de sesión
Route::post('/home' , [
	'as' => 'access',
	'uses'=> 'LoginController@access'
]);

//Control de perfiles de usuarios: PTC, Alumno, etc.
Route::get('/profile' , [
	'as' => 'profile',
	'uses'=> 'ProfileController@show'
]);