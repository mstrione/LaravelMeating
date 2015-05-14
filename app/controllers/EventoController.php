<?php

class EventoController extends \BaseController {

	
	 
	 public function get_crearEvento()
	{
		return View::make('pages.crearEvento');
	}
	public function get_EventoX()
	{
		if ($_POST)
		{	$NEvento= new Evento;
			$NEvento -> nombre=Input::get('nombreevento');
			$NEvento -> fecha=Input::get('fecha');
			$NEvento -> hora=Input::get('hora');
			$NEvento -> descripcion=Input::get('descripcion');
			$NEvento -> direccion=Input::get('direccion');
			
			$NEvento -> adultosmax=Input::get('adultosmax');
			$NEvento -> menoresmax=Input::get('menoresmax');
			
			$NEvento -> creador=Session::get('usuario_id');
			$NEvento-> save();
			return Redirect::action('MisEventosController@index');

		}
		else
		{
			return View::make('pages.crearEvento');
		}
		
	}
	
	
	public function post_crearEvento()
	{
		$input= Input::all();
		//En rules ponemos que cosas vamos a validar... con lo que trae laravel quedaria:
		$rules=array(
			'nombre' => 'required',
			'direccion' => 'required',
			'fecha'=> 'date_format:d/m/y',
			'hora' => 'required'|'time',
			'descripcion'=>'required',
			'adultosmax'=>'required'|'numeric',
			'menoresmax'=>'required'|'numeric',
			
			
			
			);
			
			$validator = Validator::make ($input, $rules); 
			
			if ($validator->fails())
			{
				return Redirect::back()->withErrors($validator)-> with('estado', 'Revise los datos ingresados') ;
				
			}
			else
			{ 
			
				$Evento = new eventos;
				$Evento->nombre = Input::get('username');
				$Evento->direccion =Input::get('apellido');
				$Evento->descripcion = Input::get('ciudad');
				$Evento->fecha = Input::get('email');;
				$Evento->hora = Input::get('nacimiento');
				$Evento->adultosmax = Input::get('password');
				$Evento->menoresmax = Input::get('provincia');
				
				$Evento->save();
			return Redirect::to('/crearEvento')->with('crearEvento', 'Su evento ha sido creado');
			
					}
			
	}
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	
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
	
	 public function get_verevento($id)
	{
		return View::make('eventos.verevento');
	}
	
	
	
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
