<?php

class InvitadoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	
	public function invitacion()
	{
		$ideventocapturado=Input::get('captura');
		$emailobtenido=Input::get('email');
		$rolCaptura=Input::get('rol');
		$idinvitado=-1; //para inicializarla
		$listaUsuarios=Usuario::all();
		foreach($listaUsuarios as $usuario){
		
			if ($usuario->email == $emailobtenido){
				$idinvitado=$usuario->id;
			}
		}
		
		if ($idinvitado==-1){
			//envio mail con link de registro
		}else{
				$invitado = new Invitado;
				$invitado->idevento = $ideventocapturado;
				$invitado->idusuario =$idinvitado;
				$invitado->email = $emailobtenido;
				$invitado->rol = $rolCaptura;
				$invitado->menores = '';
				$invitado->adultos = '';
				$invitado->confirmado = '';
				$invitado->notificado= '';
				$invitado->costo= '';
				$invitado->gasto= '';
				
				$invitado->save();
				
				return Redirect::to("verevento/$ideventocapturado");
		}
		
		
		
	}
	 
	 
	 
	public function get_invitado()
	{
		return View::make('eventos.Invitados');
	}


	
	 
	 
	 
	 
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
	public function delete_invitado($id)
	{
		$invitadoBorrar=Invitado::find($id);
		$invitadoBorrar->delete();
		return Redirect::to("MisEventos");
	}


}
