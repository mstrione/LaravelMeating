<html>
@extends('layouts.1')
<head>
	@include('includes.headvistaevento')
	
</head>
@section('content')


	@if(Session::has('estado'))
		<h3>{{Session::get('estado')}}</h3></br>
	@endif
	
<body>	
	@if(Session::has('usuario_id'))
	<legend>Evento</legend>
		<div class="row">
			<div class="col-md-6">
				<!--Nombre Evento-->
					
						<div class="form-group">
							{{Form::label('Nombre Evento')}}							
							{{Form::text('nombre', $objEvento->nombre, array( 'readonly' => 'readonly', 'class' => 'form-control'))}} <!--asi es para poder hacer lo mismo con el modificar-->
													
						</div>
				  
					<!--Lugar-->
						<div class="form-group">
							{{Form::label('Lugar')}}							
							{{Form::text('direccion', $objEvento->direccion, array('readonly' => 'readonly', 'class' => 'form-control'))}}
							
							
						</div>
                                   
					<!--Fecha-->
                        <div class="form-group">
							{{Form::label('Fecha')}}							
							{{Form::text('fecha', $objEvento->fecha , array('readonly' => 'readonly', 'class' => 'form-control'))}}							
						</div>
  
					<!--Hora-->
                        <div class="form-group">
							{{Form::label('Hora')}}							
							{{Form::text('hora', $objEvento->hora, array('readonly' => 'readonly', 'class' => 'form-control'))}}
							
						</div>
						
					<!--Descripcion-->
                        <div class="form-group">
							{{Form::label('Descripcion')}}
							
							{{Form::text('descripcion', $objEvento->descripcion, array('readonly' => 'readonly', 'class' => 'form-control'))}}
							
						</div>
  
  
  
			</div>
			<div class="col-md-6">
  					<!--Mapa de Gmap-->                  
						<div class="form-group">		
							{{Form::label('Ubicacion Geografica')}}							
							{{Form::text('nacimiento', Usuario::find(Session::get('usuario_id'))->nacimiento, array('readonly' => 'readonly', 'class' => 'form-control'))}}
														
						</div>						
                
  
			</div>
	</div>
	
	<!--PARTE DE Sala de chat-->
	
	<h1> SALA DE CHAT </h1>
	</br>
	
	<h1> CUENTAS</h1>
	
	
	
	
	<!--PARTE DE LOS INVITADOS-->
			
	<h1>INVITADOS</h1>
		<!-- Aca deberia poner un if preguntando SI es el creador...que muestre todo... sino, es invitado y solo ve algunas cosas-->
	<div class="row">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Agregar Invitado </button> 
	</div>
	
	<!--Aca mi codigo de modal de Invitado-->
		<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content"> 
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<bold><h2>AGREGAR INVITADO</h2></bold>
				</div>
				{{Form::open(array('method' => 'POST', 'class'=>'form-horizontal', 'action' =>'InvitadoController@invitacion' , 'role' => 'form'))}}
					<div class="modal-body">
					
						<!--Nombre-->
						<div class="form-group">
							<div class="col-lg-4">
								{{Form::label('Nombre')}}
							</div>
								{{Form::text('username', '', array('class' => 'form-control', 'placeholder' => 'Nombre'))}}					                                       
						</div>				  
					
						<!--Apellido-->				  
						<div class="form-group">
							<div class="col-lg-4">
								{{Form::label('Apellido')}}
							</div>
								{{Form::text('apellido', '', array('class' => 'form-control', 'placeholder' => 'Apellido'))}}					                                       
						</div>
                                   
						<!--Mail-->
						<div class="form-group">
							<div class="col-lg-4">
								{{Form::label('Email')}}
							</div>
								{{Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'email'))}}					                                       
						</div>
						<!--capturoevento-->
												
								<input name="captura" type="hidden" value="{{$objEvento->id}}">				                                       
						
					
						<!---->                
						<div class="form-group">
							{{Form::label('rol', 'Invitado')}}
							{{Form::radio('rol', 'invitado', 'selected')}}
           
							{{Form::label('rol', 'Organizador')}}
							{{Form::radio('rol', 'organizador')}}
						</div>   			
					</div>
					
					<div class="modal-footer">
						<div class="form-group">
							<div class="col-lg-10">
								{{Form::submit('Invitar', array('class' => 'btn btn-success'))}}
							</div>
						</div>					
						<a href="#" data-dismiss="modal" class="btn">Cancelar</a>
					</div>
					{{Form::close()}}
				
			</div>
			</div>
		</div>
	
	
	
	
	<div class="row">
	<table id="table-invitados" class="table table-striped">
			<thead>
				<tr>
					
					<th><label for="Invitees_email" class="required">Email <span class="required">*</span></label></th>
					<th><label class="inline" >Organizador</label></th>
					<th><label class="inline" >Asistirá</label></th>
					<th><label class="inline" >Adultos</label></th>
					<th><label class="inline" >Niños</label></th>
					<th><label class="inline" >Costo</label></th>
					<th><label class="inline" >Gastó</label></th>
					<th><label class="inline" >Balance</label></th>					
					<th><label class="inline" >Saldado</label></th>
					<th><label class="inline" >ACCIONES</label></th>
					
				</tr>
			</thead>
		<tbody>
				@foreach ($listaDeInvitados as $invitado )
				<tr>
					<td>{{$invitado->email}}</td>
		            <td>{{$invitado->rol}}</td>
					<td>{{$invitado->confirmado}}</td>
					<td>{{$invitado->adultos}}</td>
					<td>{{$invitado->menores}}</td>
					<td>{{$invitado->costo}}</td>
					<td>{{$invitado->gasto}}</td>
					
					<td>aca balance</td>
					<td>aca si esta saldado</td>
		            <td>
						
						<a class="btn btn-info" href="" title="Envia un email"><i class="icon-envelope"></i>Enviar Mail</a>
						<a class="btn btn-info" href="" title="Envia la cuenta"><i class="icon-envelope"></i>Enviar Cuentas</a>
						<a class="btn btn-danger" href="/eliminarinvitado/{{$invitado->id}}" title="Eliminar invitado"><i class="icon-envelope"></i>Eliminar</a>
					</td>		
				</tr>
				@endforeach
				
			
        </tbody>
    </table>
	
	<!-- LISTA DE ITEMS-->
	<h1>ITEMS-LISTA</h1>	
		<!-- Aca SI es el creador puede agregar items... SINO si es invitado, que diga si lleva o no-->
	
	<div class="row">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalItem">Agregar Item </button> 
	</div>
					
	<!--Aca mi codigo de modal de Items-->
		<div id="myModalItem" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content"> 
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<bold><h2>AGREGAR ITEM</h2></bold>
				</div>
				{{Form::open(array('method' => 'POST', 'class'=>'form-horizontal', 'action' =>'ItemController@agregar' , 'role' => 'form'))}}
					<div class="modal-body">
						<div class="form-group">								
							<div class="row">
								<div class="col-xs-6">
									{{Form::label('Nombre Item')}}						
									{{Form::text('nombre','',array('class'=>'form-control'))}} 	
									<div>{{$errors->first('nombre')}}</div>							
								</div>					
						
								<div class="col-xs-6">
									{{Form::label('Cantidad')}}		
										</br>
									{{Form::input('number','cantidad')}} 			
									<div>{{$errors->first('cantidad')}}</div>						
								</div>
							</div>
									<input name="captura" type="hidden" value="{{$objEvento->id}}">				                                       
						</div>						
					</div>
					
					<div class="modal-footer">
						<div class="form-group" class="col-lg-4 col-lg-offset-2">
							<p>{{Form::submit('Agegar Item', array('class' => 'btn btn-success'))}}</p>		
								<a href="#" data-dismiss="modal" class="btn">Cancelar</a>
						</div>   
								{{Form::close()}}
						
					</div>
				
			</div>
		</div>
<!----></div>
	
	
	
	<div class="row">		
	<table id="table-invitados" class="table table-striped">
			<thead>
				<tr>
					<th><label class="inline" >Item</label></th>
					<th><label class="inline" >Cantidad Requerida</label></th>
					<th><label for="Invitees_email" class="required">Email <span class="required">*</span></label></th>							
					<th><label class="inline" >Falta</label></th>
					<th><label class="inline" >Acciones</label></th>
										
				</tr>
			</thead>
		<tbody>
				@foreach ($listaDeItems as $item )		
				<tr>
		            <td>{{$item->nombre}}</td>
					<td>{{$item->cantidad}}</td>		            
					<td>
					aca tiramos el mail de quien asignamos el item
					</td>           
					<td>
						aca tiramos el resultado de lo requerido menos los items ok
					</td>
					<td> 
						
						<a class="btn btn-info" href="" title="Asigna el item"><i class="icon-envelope"></i>Asignar</a>
						<a class="btn btn-info" href="" title="Llevar"><i class="icon-envelope"></i>Yo llevo</a>
						<a class="btn btn-danger"  href="/eliminaritem/{{$item->id}}" title="Elimina el item"><i class="icon-envelope"></i>Eliminar</a>
					</td>
					
				</tr>
				@endforeach
			
        </tbody>
    </table>
	</div>
	
	<div class="row"> 
            <h1 class="subheader">Imagenes</h1>
			
            <!--si el formulario contiene errores de validación-->
            @if($errors->has())
                <div class="alert-box alert">           
                    <!--recorremos los errores en un loop y los mostramos-->
                    @foreach ($errors->all('<p>:message</p>') as $message)
                        {{ $message }}
                    @endforeach
                     
                </div>
            @endif
            
            @if(Session::has('confirm'))
                <div class="alert-box success round">
                    {{ Session::get('confirm') }}
                </div>                    
            @endif
            <div class="form">
              
                
				{{Form::open(array('method' => 'POST', 'class'=>'form-horizontal', 'action' =>'FotoController@post_foto' ,'files' => true ,'role' => 'form'))}}
				<input name="captura" type="hidden" value="{{$objEvento->id}}">	
                {{ Form::label('photo', 'photo') }}                
                <!--así se crea un campo file en laravel-->
                {{ Form::file('photo') }}
                
                {{ Form::label('titulo', 'titulo') }} 
                {{ Form::text('titulo') }}
               
                
                
                <br />
                {{ Form::submit('Cargar Foto', array("class" => "button expand round")) }}
 
                {{ Form::close() }}
 
            </div>    
             
        </div>
		
		

	@else
	@endif
				
</body>
@stop
</html>	

