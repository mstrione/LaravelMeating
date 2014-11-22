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
		// return 'aca mostramos la info del usuario:' . $id;
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
	/*
	public function get_login()
	{
		if (Usuario::isLogged()) //si el usuario esta logueado
			return Redirect::to('ACA IRIA LA PAGINA DE MIS EVENTOS');
		else
			return View::make('Aca iria de nuevo a la pagina del login');
	}

	public function post_login()
	{
		$input=Input::all();
		$rules=array(
				'username'=>'required|exists:usuarios,username',
				'password'=>'required',
		);
		
		$validator = Validator::make($input, $rules);//Con la clase Validator comparamos el input y las reglas
		
		if ($validator->fails()) //si la validacion falló
			{
			return Redirect::back()->withErrors($validator); // vuelvo a la pagina mostrando los errores de la validacion
			}
			else
			{
				$username=Input::get('username');
				$password=Input::get('password');
				
				if ($usuario = User::where('username', '=', $username)->first()) //de la clase User me fijo si el username ingresado se encuentra..recorriendo desde el principio y lo guardo en usuario.
				{
					if (Hash::check($password, $usuario->$password) // la clase hash me chequea que el password sea el pasword del usuario
					{
						Session::put('user_id', $usuario->id);
						Session::put('user_username',$usuario->username);
						Session::put('user_type',$user->type);
						return Redirect::to('A la pagina despues del logueo... mis eventos');
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

}