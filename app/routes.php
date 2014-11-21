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

Route:: get('QueEs.php',function(){return View::Make('QueEs');});

Route:: get('QuienesSomos.php',function(){return View::Make('QuienesSomos');});

Route:: get('Contacto.php',function(){return View::Make('Contacto');});

Route:: get('Login.php',function(){return View::Make('Login');});

Route:: get('Registro.php',function(){return View::Make('Registro');});

Route::resource('Usuario','UsuarioController');

Route::resource('Evento','EventoController');

Route::resource('Invitado','InvitadoController');

Route::resource('Item','ItemController');

Route::resource('Itemsok','ItemsokController');

Route::resource('Foto','FotoController');



