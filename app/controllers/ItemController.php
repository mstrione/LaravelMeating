<?php

class ItemController extends \BaseController {

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
	 
	 /*public function mostrarItems()
	 {
		$items=Item::all();
		//obtengo todos los items y los paso a la vista
		return View::make('item.lista', array('items'=>$items)); 
		//despues del make, los argumentos son('view o sea el blade de la vista', 'lo que se pasa')
	 }*/
	 
	 
	 
	public function crearItem()
	{
		//primero llamo a la funcion de agregar Item en el modelo y le paso los datos del formulario
		$respuesta = Item::agregarItem(Input::all());
		//dependiendo de la rta del modelo retorno los msj de error con los datos viejos del formulario o el mensaje de exito
		if ($respuesta['error']==true)
		{
			return Redirect::to('item')->withErrors($respuesta['mensaje'])witInput();
			
		}else{
				return Redirect::to('item')->with('mensaje', $respuesta['mensaje']);
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
