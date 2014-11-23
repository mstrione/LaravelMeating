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

Route::get('/', function(){return View::make('index');});

Route::get('MisEventos.php','MisEventosController@index'); 

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


//Route::get('/','UsuarioController@index');



// Deberiamos tener...
/* 1 ruta para la pagina principal
2 rutas para la pagina de contacto(una que muestra el formulario y otra que lo procesa-Get y Post)
Esto se repite para el formulario de Login, el de Registro, el de eventos, el de llevar item (ver el de cuentas)

tambien se puede hacer un grupo de rutas donde solo pueda ver el administrador
Route::group(array('prefix'=>'admin'),function()
{
	Route:group(array('before'=>admin'),function()
	{
	aca irian las rutas de get y post que usaria el AdminController.
	la vista principal, agregar usuarios, eventos etc..
	}
	}
	
