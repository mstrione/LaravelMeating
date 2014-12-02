<?php

class registroController extends BaseController {

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
	
	
	
	public function get_registro()
	{
		return View::make('registro');
	}
	
	public function post_registro()
	{
		$input= Input::all();
		$rules=array(
			'username' => 'required|min:3|max:10|unique:usuarios, username',
			'apellido'=>'required|min:3|max:10|unique:usuarios, username',
			'email' => 'required|email',
			'password' => 'required|min:4|max:10',
			'verificacion'=>'same:password',
			'ciudad'=>'required',
			
			);
			
			$validator = Validator::make ($input, $rules); 
			
			if ($validator->fails())
			{
				return Redirect::back()->withErrors($validator)-> with('estado', 'Revise los datos ingresados') ;
				
			}
			else
			{ 
				$datos=array(
					'nombre'=>Input::get('nombre'),
					'email'=> Input::get('email'),
					'asunto'=>Input::get('asunto'),
					'mensaje'=>Input::get('mensaje')
					);
					
					
					
					return Redirect::to('/registro')->with('estado', 'Se ha registrado con exito');
			}
	}
	
	
	
	
		
	
		
}