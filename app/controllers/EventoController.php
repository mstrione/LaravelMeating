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
	  
	
	
	
	 public function get_verevento($id=null) 
	{
		$objEvento=Evento::find($id);
		$listaDeInvitados= Invitado::where('idevento','=',$id)->get(); //idevento es el nombre en la tabla, el atributo en invitados
		$listaDeItems= Item::where('idevento','=',$id)->get();
		return View::make('eventos.verevento', array('objEvento'=>$objEvento , 'listaDeInvitados'=>$listaDeInvitados , 'listaDeItems'=>$listaDeItems));
	}
	
	
	
	/*public function get_modificarevento($id)
	{
	
	return View::make('eventos.modificarevento');
	}
	
	
	public function modificarevento($id=null)
	{
		
			$NEvento=Evento::find($id);
			$NEvento -> nombre=Input::get('nombreevento');
			$NEvento -> fecha=Input::get('fecha');
			$NEvento -> hora=Input::get('hora');
			$NEvento -> descripcion=Input::get('descripcion');
			$NEvento -> direccion=Input::get('direccion');
			
			$NEvento -> adultosmax=Input::get('adultosmax');
			$NEvento -> menoresmax=Input::get('menoresmax');
			
			$NEvento -> creador=Session::get('usuario_id');
			
			$NEvento-> save();
			return Redirect::to("verevento/$id"); //deberia mostrar el ver evento con los nuevos valores
	}*/


	public function delete_evento($id)
	{
        $borrarevento = Evento::find($id);
        $borrarevento->delete();

        return Redirect::to('MisEventos');
	}
	


}
