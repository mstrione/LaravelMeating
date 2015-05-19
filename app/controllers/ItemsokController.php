<?php

class ItemsokController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function asignar()
	{
		$ideventocapturado=Input::get('capturaevitok');
		$iditemcap=Input::get('capturaiditem');
		$emailusuario=Input::get('email');
		$listaDeUsuarios=Usuario::all();
		foreach ($listaDeUsuarios as $usuario){
		
			if ($usuario->email == $emailusuario){
				$usuarioide=$usuario->id;
				$itemsok = new Itemsok;
				$itemsok->iditem=$iditemcap;
				$itemsok->cantidad = Input::get('cantidad');
				$itemsok->idevento =$ideventocapturado;
				$itemsok->idusuario = $usuarioide ;
				$itemsok->save();
				return Redirect::to("verevento/$ideventocapturado")->with('item', 'Item asignado correctamente');
			}
			
			
				
		}
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
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
