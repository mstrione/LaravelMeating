<?php


class MisEventosController extends BaseController {
	public function index()
	{
		$listaDeEventos=MisEventos::all(); 
		return View::make('eventos.MisEventos',array('listaDeEventos'=>$listaDeEventos ));
	}

	
	
	/*public function edit($id)
	{
	$listaDeEventos = MisEventos::find($id);
	if (is_null ($id))
	{
	App::abort(404);
	}

	return View::make('eventos.MisEventos', array('listaDeEventos'=> $listaDeEventos);
}*/
	
	
}