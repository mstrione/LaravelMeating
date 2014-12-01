<?php

class EventoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	 
	 
	 
	 
	 
	 public function get_crearEvento()
	{
		return View::make('pages.crearEvento');
	}
	
	
	public function post_crearEvento()
	{
		$input= Input::all();
		//En rules ponemos que cosas vamos a validar... con lo que trae laravel quedaria:
		$rules=array(
			'nombre' => 'required',
			'direccion' => 'required',
			/*'fecha'=> 'date_format:d/m/y',
			'hora' => 'required'|'time',*/
			'descripcion'=>'required'
			
			
			
			);
			
			$validator = Validator::make ($input, $rules); //Aca se toma lo ingresado y revisa la regla
			
			
			if ( $validator->fails() ){
 
        // en caso de que la validación falle vamos a retornar al formulario 
        // pero vamos a enviar los errores que devolvió Validator
        // y también los datos que el usuario escribió 
        return Redirect::to('pages.crearEvento')
                // Aquí se esta devolviendo a la vista los errores 
                ->withErrors($validator)
                // Aquí se esta devolviendo a la vista todos los datos del formulario
                ->withInput();
			}else{
				echo 'Datos Validos!';
					exit;
					}
			
	}
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	public function crearEvento()
	{
		/*
		$respuesta = Evento::agregarEvento(Input::all());
		if ($respuesta['error']==true)
		{
			return Redirect::to('crearEvento')->withErrors($respuesta['mensaje'])->withInput;			
		}else {
			return Redirect::to('evento')->with('mensaje', $respuesta['mensaje']);
			}*/
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
	public function mostrarEventos($id)
	{
		/*
		$eventos=Evento::all(); // o mostrar el evento pasado por id
		$usuarios=Usuario::all;
		$items=Item::all;
		$fotos=Foto::all;
		$invitados=Invitado::all;
		//falta poner el chat e items ok!*/
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
