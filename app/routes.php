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




// Deberiamos tener...
/* 1 ruta para la pagina principal
2 rutas para la pagina de contacto(una que muestra el formulario y otra que lo procesa-Get y Post)
Esto se repite para el formulario de Login, el de Registro, el de eventos, el de llevar item (ver el de cuentas)

tambien se puede hacer un grupo de rutas donde solo pueda ver el administrador
*/

//WebController*******************************************
Route::get('/', 'HomeController@showPrincipal');
Route::get('/aboutUs', 'HomeController@showAboutUs');
Route::get('/about', 'HomeController@showAbout');

//contacto
Route::get('/contacto', 'HomeController@get_contacto');
Route::post('/contacto', 'HomeController@post_contacto');



//RUTA USUARIOS********************************************
Route::get(Lang::get('routes.login'), 'UsuarioController@get_login');
Route::post(Lang::get('routes.login'), 'UsuarioController@post_login');
Route::get(Lang::get('routes.logout'), 'UsuarioController@logout');
Route::get('/bienvenida', 'UsuarioController@bienvenida');
Route::get('/MisEventos', 'UsuarioController@MisEventos');







//RUTA DE LA PAGINA DEL INICIO DE SESION
//ESTO HAY QUE ARREGLAR---->


/*
// Nos mostrará el formulario de login.
Route::get('login', 'AuthController@showLogin');

// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('/', function()
    {
        return View::make('hello');
    });
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'AuthController@logOut');
});*/  //<------------- ME RETORNA LOS ERRORES PERO NO ENTRA A LA SESION!!!!!!! VER PORQUE..
 







//RUTA DE LA PAGINA DE REGISTRO
//esta ruta es para crear al usuario(se hace el post)

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
 




Route::get('agregarinvitado', function()
{
	return View::make('pages.agregarinvitado');
});


//***************************************
//RUTA DE CREAR EVENTO


/*Route::get('crearEvento', function()
{
	return View::make('pages.crearEvento');
});*/
Route::get('crearEvento', 'EventoController@get_crearEvento');
 
Route::post('crearEvento', 'EventoController@post_crearEvento');




