<?php

class ContactoController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome'); aca seria ContactoController en el route
	|
	*/

	public function index()
	{
		return View::make('index');
	}
	
	public function get_contacto()
	{
		return View::make('contacto');
	}
	
	public function post_contacto()
	{
		$input= Input::all();
		//En rules ponemos que cosas vamos a validar... con lo que trae laravel quedaria:
		$rules=array(
			'nombre' => 'required',
			'email' => 'required|email',
			'mensaje' => 'required',
			);
			
			$validator = Validator::make ($input, $rules); //Aca se toma lo ingresado y revisa la regla
			
			if ($validator->fails())
			{
				return Redirect::back()->withErrors($validator)-> with('estado', 'No enviado. Compruebe los datos') //vuelve hacia atras marcando los errores
				
			}
			else
			{ //aca se van a tomar los valores ingresados
				$datos=array(
					'nombre'=>Input::get('nombre'),
					'email'=> Input::get('email'),
					'asunto'=>Input::get('asunto'),
					'mensaje'=>Input::get('mensaje')
					);
					
					//AHORA MANDAMOS EL MENSAJE DEL USUARIO A NOSOTROS
					
					Mail::send('emails.contacto', $datos, function($message)
					{
						$message->from('meating@algo.com', 'Laravel');
						$message->to(Input::get('email'))->subject(Input::get)'asunto'));
						});
						
						return Redirect::to('/contacto')->with('estado', 'El mensaje se ha enviado correctamente');
			}
	}
		
		
}


