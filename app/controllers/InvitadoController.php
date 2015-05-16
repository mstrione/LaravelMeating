<?php

class InvitadoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	
	public function get_EventoX()
	{
		if ($_POST)
		{	$NInvitado= new Invitado;
			$NInvitado -> email=Input::get('email');
			$NInvitado -> rol=Input::get('rol');
			
			$NInvitado-> save();
			return Redirect::action('MisEventosController@indexInvitados');

		}
		else
		{
			return View::make('pages.crearEvento');
		}
		
	}
	 
	 
	 
	public function get_invitado()
	{
		return View::make('eventos.Invitados');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	 
	 // ACA INTRODUZCO LOS DATOS DEL REGISTRO A LA BASE DE DATOS, ES DECIR, QUE CREO EL USUARIO
	/*public function post_agregarInvitado()
	{
		$input= Input::all();
		$reglas=array(
			'username' => 'required|min:3|max:10',
			'apellido'=>'required|min:3|max:10',
			'email' => 'required|email'			
			);
			
			 $mensajes = array(
            'required' => 'El campo :attribute es obligatorio.',
            'email' => 'El campo :attribute debe ser un email válido.',
            'unique' => 'El email ingresado ya existe en la base de datos',
			
        );
			//busco en la tabla de invitados los que tengan ese email, si existe; envio invitacion. Sino, envia mail de registro.
			$validator = Validator::make ($input, $reglas,$mensajes); 
			
			if ($validator->fails())
			{
				return Redirect::back()->withErrors($validator)-> with('estado', 'Revise los datos ingresados') ;
				
			}
			else
			{ 
			
			
				$invitado = new Usuario;
				$usuario->username = Input::get('username');
				$usuario->apellido =Input::get('apellido');
				$usuario->password = Input::get('password');
				$usuario->nacimiento = Input::get('nacimiento');
				$usuario->sexo = Input::get('sexo');;
				$usuario->email = Input::get('email');;
				$usuario->provincia = Input::get('provincia');
				$usuario->ciudad = Input::get('ciudad');
				
				$usuario->save();
			return Redirect::to('/registro')->with('registro', 'Registro completado. Accede a su cuenta');
			
				
					
			}
	}
	 */
	 
	 
	 
	 
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
