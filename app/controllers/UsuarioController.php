<?php

class UsuarioController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() // cada vez que se rutea, laravel me lo envia aca
	{
		$usuarios=Usuario::all();
		return View::make('index')->with('usuarios',$usuarios); 
		 //return 'Esta es la lista de usuarios';

	}

//---------------------------------------------------PARTE DE LOS REGISTROS---------------------------------------------
	//ACA MUESTRO LA PAGINA DEL REGISTRO
	public function get_registro()
	{
		{
		if(Usuario::isLogged())
			{
			return Redirect::to('/MisEventos');
			}
			else
			{
				return View::make('pages.registro');
			}
		}
	}
	
	
	// ACA INTRODUZCO LOS DATOS DEL REGISTRO A LA BASE DE DATOS, ES DECIR, QUE CREO EL USUARIO
	public function post_registro()
	{
		$input= Input::all();
		$reglas=array(
			'username' => 'required|min:3|max:10',
			'apellido'=>'required|min:3|max:10',
			'email' => 'required|email',
			'password' => 'required|min:4|max:10',
			'verificacion'=>'same:password',
			'ciudad'=>'required',
			'provincia'=>'required',
			'nacimiento'=>'required',
			'terms' => 'required'
			
			);
			
			 $mensajes = array(
            'required' => 'El campo :attribute es obligatorio.',
            'email' => 'El campo :attribute debe ser un email válido.',
            'unique' => 'El email ingresado ya existe en la base de datos',
			
        );
			
			$validator = Validator::make ($input, $reglas,$mensajes); 
			
			if ($validator->fails())
			{
				return Redirect::back()->withErrors($validator)-> with('estado', 'Revise los datos ingresados') ;
				
			}
			else
			{ 
			
			
				$usuario = new Usuario;
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
	/*
        $usuario = Usuario::find($id);

        return View::make('usuario.profile', array('usuario' => $usuario));
    
		 return 'aca mostramos la info del usuario:' . $id;*/
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// return ' aca editamos el usuario:' . $id;
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
	
	//--------------------------------------------------------------------------------------------
	
	
	
	//--------------------------------------------PARTE DE LOS LOGUEOS----------------------------------------------------------
	
	public function bienvenida()
	{
		return View::make('usuarios.bienvenida');
	}

	
	public function get_login()
	{
		if(Usuario::isLogged())
			return Redirect::to('/bienvenida');
		else
			return View::make('usuarios.login');
	}
	
	public function post_login()
	{
		$input = Input::all();
		$rules = array(
			'username' => 'required|exists:usuarios,username',
			'password' => 'required',
		);
		$validator = Validator::make($input, $rules);
		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}
		else
		{
			$username = Input::get('username');
			$password = Input::get('password');
			if($usuario = Usuario::where('username', '=', $username)->first())
			{
				if($password = Usuario::where('password', '=', $password)->first())
				{
					Session::put('usuario_id', $usuario->id);
					Session::put('usuario_username', $usuario->username);
					
					return Redirect::to('/bienvenida');
				}
				else
				{
					return Redirect::to('/login');
				}
			}
			else
			{
				return Redirect::to('/login');
			}
		}
	}
	public function logout()
	{
		Session::flush();
		return Redirect::to('/');
	}

	
/***********************PERFIL***********	*/
public function get_perfil()
	{
		return View::make('usuarios.perfil');
	}
	
	
	/************************************************/
	public function getAuthIdentifier()
{
return $this->getKey();
}

public function getAuthPassword()
{
return $this->password;
} 

public function getRememberToken()
{
return $this->remember_token;
}

public function setRememberToken($value)
{
$this->remember_token = $value;
}

public function getRememberTokenName()
{
return "remember_token";
}

public function getReminderEmail()
{
return $this->email;
}
	
	
	
	

}