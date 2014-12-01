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


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		 return 'aca va el form para crear un usuario';
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
	
	/*public function get_login()
	{
		if (Usuario::isLogged()) //si el usuario esta logueado
			return Redirect::to('/MisEventos');
		else
			return View::make('pages.login');
	}

	public function post_login()
	{
		$input=Input::all();
		$rules=array(
				'email'=>'required|exists:usuarios,email',
				'password'=>'required',
		);
		
		$validator = Validator::make($input, $rules);//Con la clase Validator comparamos el input y las reglas
		
		if ($validator->fails()) //si la validacion falló
			{
			return Redirect::back()->withErrors($validator); // vuelvo a la pagina mostrando los errores de la validacion
			}
			else
			{
				$email=Input::get('email');
				$password=Input::get('password');
				
				if ($usuario = Usuario::where('email', '=', $email)->first()) //de la clase Usuario fijo si el mail ingresado se encuentra..recorriendo desde el principio y lo guardo en usuario.
				{
					if (Hash::check($password, $usuario->$password) // la clase hash me chequea que el password sea el pasword del usuario
					{
						Session::put('user_id', $usuario->id);
						Session::put('user_mail',$usuario->mail);
						
						return Redirect::to('MisEventos');
					}
					else{
						return Redirect::to('/login'); // sino me redirijo nuevamente a la pagina de logueo para loguearse
						}
				}
				else{
					return Redirect::to('/login');  // en este caso si no encontro el usuario al comienzo.. lo lleva nuevamente a la pagina.
					}
			}
	}

	public function logout()
	{
		Session::flush();
		return Redirect::to('/');  //aca cerre la sesion y lo deberia retornar a la pagina principal
	}*/
	
	
	//---------------------------------------------------PARTE DE LOS REGISTROS---------------------------------------------
	
	
	Public function Get_Registrarme()
	{
		{
		if(User::isLogged())
			{
			return Redirect::to('/MisEventos');
			}
			else
			{
				return View::make('pages.registro');
			}
		}
	}
	
	
	Public function Post_Registrarme()
	{
	
		$input = Input::all();

		$rules = array(
			'username' => 'required|unique:usuarios,username',
			'apellido'=>'required',
			'email' => 'required|email|unique:usuarios,email',
			'password' => 'required|between:5,10', //password entre 5 y 10 caracteres..es el min y el max pasado.
			'password2' => 'required|same:password',
			'nacimiento'=>'required|date_format:date', //El campo bajo validación debe coincidir con format (formato) definido acorde con la función PHP date_parse_from_format.
			'sexo'=>'required|integer',
			'provincia'=>'required',
			'ciudad'=>'required|alpha',
			
			
		);

		$validator = Validator::make($input, $rules); //comparo lo ingresado con las reglas

		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator); //si la validacion falla vuelve con los errores
		}
		else
		{
			$usuario = new Usuario;
				$usuario->username = Input::get('username');
				$usuario->apellido = Input::get('apellido');
				$usuario->password = Hash::make(Input::get('password'));
				$usuario->nacimiento = Input::get('nacimiento');
				$usuario->sexo = Input::get('sexo');
				$usuario->email = Input::get('email');
				$usuario->provincia = Input::get('provincia');
				$usuario->ciudad = Input::get('ciudad');
				//$usuario->verificacion = '';
				//$$usuario->activo = 1;
			$usuario->save();

			return Redirect::to('/login')->with('registro', 'Registro completado. Acceda a su cuenta');
		}
	
	
	
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