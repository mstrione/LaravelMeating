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
			
			// El creador esta invitado por default
			$Ninvitado= new Invitado;
			$Ninvitado -> idevento = $NEvento->id;
			$Ninvitado -> idusuario = $NEvento -> creador;
			$Ninvitado -> rol = 0 ;// organizador
			$Ninvitado -> menores=0;
			$Ninvitado -> adultos=1;
			$Ninvitado -> notificado=1;
			$Ninvitado -> confirmado=1;
			$Ninvitado -> save();
			
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
		$usuarioInvitado = Invitado::where('idevento','=',$id)->where('idusuario','=',Session::get('usuario_id'))->get()[0]; // usuario logueado invitado 
		$listaDeItems= Item::where('idevento','=',$id)->get();
		$listaDeItemsOk=Itemsok::where('idevento','=',$id)->get(); //idevento es el nombre en la tabla de itemsok
		return View::make('eventos.verevento', array('objEvento'=>$objEvento , 'listaDeInvitados'=>$listaDeInvitados , 'listaDeItems'=>$listaDeItems, 'listaDeItemsOk'=>$listaDeItemsOk, 'usuarioInvitado'=>$usuarioInvitado));
	}
	
	
	
	public function get_modificarevento($id)
	{
	 $eventomodid=Evento::find($id);
	 if($eventomodid)
	 {
		return View::make('eventos.modificarevento', array('eventomodid'=>$eventomodid));
		}
	return Redirect::to("MisEventos");
	}
	
	
	public function modificarelevento()
	{
			$ideventoamod=Input::get('capturaevent');
			$NEvento=Evento::find($ideventoamod);
			
			$NEvento -> nombre=Input::get('nombre');
			$NEvento -> fecha=Input::get('fecha');
			$NEvento -> hora=Input::get('hora');
			$NEvento -> descripcion=Input::get('descripcion');
			$NEvento -> direccion=Input::get('direccion');
			
			$NEvento -> adultosmax=Input::get('adultosmax');
			$NEvento -> menoresmax=Input::get('menoresmax');
			
			$NEvento -> creador=Session::get('usuario_id');
			
			$NEvento-> save();
			return Redirect::to("verevento/$ideventoamod"); //deberia mostrar el ver evento con los nuevos valores
	}


	public function delete_evento($id)
	{
        $borrarevento = Evento::find($id);
        $borrarevento->delete();

        return Redirect::to('MisEventos');
	}
	
	/*public function enviarmail($id)
	{
		$usuario = Usuario::find($id);
		$data = aray( $usuario->username, $usuario->email);
		Mail::send('mails.contact',$data,'',);
        return Redirect::to('MisEventos');
		
		$input = Input::all();
		
			$datos = array($usuario->username, $usuario->email, $asunto='', $mensaje='');
				//'nombre' => Input::get('nombre'),
				//'email' => Input::get('email'),
				//'asunto' => Input::get('asunto'),
				//'mensaje' => Input::get('mensaje')
				//		);
				
			Mail::send('emails.contacto', $datos, function($message) //se envia el mail
			{
			    $message->from('eze_torress@hotmail.com', 'Laravel');//eventuales@web.com
			    $message->to(Input::get('email'))->subject(Input::get('asunto'));
			});
			return Redirect::to('/contacto')->with('estado', 'Mensaje enviado correctamente');
        
	}*/
	
	public function Cuentas()
	{
		
        if ($metodo==0)
		//obtengo el costo fijo por invitado 
		//al evento tanto le coloco el valor de metodo cuenta
		//los costos de los invitados del evento todos con el mismo valor, inserto los costos en los inv.

        return Redirect::to('MisEventos');
	}


}
