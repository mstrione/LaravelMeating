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
	public function crearEvento()
	{
		//
		$respuesta = Evento::agregarEvento(Input::all());
		if $respuesta['error']==true=
		{
			return Redirect::to('evento')->withErrors($respuesta['mensaje'])->withInput;			
		}else {
			return Redirect::to('evento')->with('mensaje', $respuesta['mensaje']);
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
	public function mostrarEventos($id)
	{
		/*
		$eventos=Evento::all(); // o mostrar el evento pasado por id
		$usuarios=Usuario::all;
		$items=Item::all;
		$fotos=Foto::all;
		$invitados=Invitado::all;
		//falta poner el chat e items ok!
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
