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




//WebController*******************************************
Route::get('/', 'HomeController@showPrincipal');
Route::get('/aboutUs', 'HomeController@showAboutUs');
Route::get('/about', 'HomeController@showAbout');
Route::get('/Cuentas', 'HomeController@showCuentas');
//contacto
Route::get('/contacto', 'HomeController@get_contacto');
Route::post('/contacto', 'HomeController@post_contacto');



//RUTA USUARIOS********************************************
//LOGs
Route::get(Lang::get('routes.login'), 'UsuarioController@get_login');
Route::post(Lang::get('routes.login'), 'UsuarioController@post_login');
Route::get(Lang::get('routes.logout'), 'UsuarioController@logout');
Route::get('/recordarpass', 'UsuarioController@get_recordarpass');
Route::post('/recordarpass', 'UsuarioController@post_recordarpass');

//Otros
Route::get('/bienvenida', 'UsuarioController@bienvenida');
Route::get('/perfil', 'UsuarioController@get_perfil');

Route::get('/MisEventos', 'MisEventosController@index');
//RUTA registro********************************************
Route::get('/registro', 'UsuarioController@get_registro');
Route::post('/registro', 'UsuarioController@post_registro');

//RUTA PARA ITEM----------------------------------

//Route::get('/itempop', 'ItemController@get_Item');
//Route::post('/itempop', 'ItemController@post_Item');
/*Route::get('/itempop', 'ItemController@show_item');
*/

Route::get('/upload', 'FotoController@get_foto');
Route::post('/upload', 'FotoController@post_foto');


//ItemController
Route::post('/AgregarElItem', 'ItemController@agregar');
Route::post('/Asignar', 'ItemsokController@asignar');

//INVITADOS

Route::post('/invitar', 'InvitadoController@invitacion');

//***************************************
//RUTA DE CREAR EVENTO



Route::get('crearEvento', 'EventoController@get_crearEvento');
Route::Post('/MisEventos','EventoController@get_EventoX');
Route::Post('/MisEventos/{id}','EventoController@destroy');
 
Route::post('crearEvento', 'EventoController@get_EventoX');

Route::get('verevento/{id}', 'EventoController@get_verevento');

Route::post('/Modificar', 'EventoController@modificarelevento');

Route::get('modificarevento/{id}', 'EventoController@get_modificarevento');

Route::get('eliminaritem/{id}', 'ItemController@delete_item');
Route::get('eliminarinvitado/{id}', 'InvitadoController@delete_invitado');
Route::get('eliminarevento/{id}', 'EventoController@delete_evento');

Route::get('mail/{id}', 'EventoController@enviarmail');


Route::post('/asistir', 'InvitadoController@asistir');
