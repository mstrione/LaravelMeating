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

Route::get('/', function()
{	
return View::make('index');});

Route::resource('usuarios','UsuarioController');

Route::resource('eventos','EventoController');

Route::resource('invitados','InvitadoController');

Route::resource('items','ItemController');

Route::resource('itemsoks','ItemsokController');

Route::resource('fotos','FotoController');
