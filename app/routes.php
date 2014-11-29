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

/*Route::get('/', function()
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

Route::get('/','PruebaController@index');*/


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
	}*/
//RUTA DE LA PAGINA PRINCIPAL	
Route::get('/', function()
{
	return View::make('pages.home');
	});
//RUTA DE ACERCA DE MEATING
Route::get('about', function()
{
	return View::make('pages.about');
});

//RUTA DE ACERCA DE NOSOTROS
Route::get('aboutUs', function()
{
	return View::make('pages.aboutUs');
});

//RUTA DE CONTACTO

Route::get('contacto', function()
{
	return View::make('pages.contacto');
});

/*Route::post('/contacto', 'HomeController@postcontacto'); 
ACA DEBERIA AGREGAR EL CONTROLADOR DE CONTACTO COMO CONTROLADOR DEL SITIO QUE SE LLAMA HOME*/



//RUTA DE LA PAGINA DEL INICIO DE SESION
Route::get('login', function()
{
	return View::make('pages.login');
});

//RUTA DE LA PAGINA DE REGISTRO
Route::get('registro', function()
{
	return View::make('pages.registro');
});

Route::get('itempop', function()
{
	return View::make('pages.itempop');
});

Route::get('item', 'ItemControllerController@mostrarItems');
 
Route::post('item', 'ItemController@crearItem');
 
Route::get('evento', 'EventoController@mostrarEventos');
 
Route::post('evento', 'EventoController@crearEvento');


