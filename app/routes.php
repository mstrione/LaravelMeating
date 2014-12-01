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

Route::get('login', function()
{
	return View::make('pages.login');
});
/*Route::post('/contacto', 'HomeController@postcontacto'); 
ACA DEBERIA AGREGAR EL CONTROLADOR DE CONTACTO COMO CONTROLADOR DEL SITIO QUE SE LLAMA HOME*/



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
 
Route::get('evento', 'EventoController@mostrarEventos');
 
Route::post('evento', 'EventoController@crearEvento');



Route::get('agregarinvitado', function()
{
	return View::make('pages.agregarinvitado');
});
