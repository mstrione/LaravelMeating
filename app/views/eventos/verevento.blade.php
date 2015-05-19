<html>
@extends('layouts.1')
<head>
	@include('includes.headvistaevento')
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
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
	
	
	
	
	
	
	
	<!-- aca muestro las cuentas si el evento esta cerrado-->
	
	
	
	
	
	
<div class="row">
  <div class="col-xs-12 col-md-8">
  
  			

	<ul >
		<li >
			<div input id="costofijoinvitado1" type="radio" class="accordion-header" name="" checked="" value="0"> Valor fijo por invitado</div>
			<div class="accordion-content"><p>Se establece un valor fijo de costo por invitado</p></div>
		</li>
		
		<li class="accordion-container">
			<div input id="costofijo1" type="radio" class="accordion-header" name="" checked="" value="1">Se establece un costo fijo segun asistente</div>
			<div class="accordion-content"><p>Se distinguen dos valores fijos de costo para cada uno de los tipos de asistentes respectivamente, adultos y menores, tambien independientemente del costo total del evento.</p></div>
		</li>
		
		
		<li class="accordion-container">
			<div input id="division1" type="radio" class="accordion-header" name="" checked="" value="2">Se divide lo gastado en partes iguales</div>
			<div class="accordion-content"><p>Se divide el costo total del evento entre todos los asistentes sin distincion alguna.</p></div>
		</li>
		<li class="accordion-container">
			<div input id="divisionasistentegastado1" type="radio" class="accordion-header" name="" checked="" value="3">Se divide lo gastado segun asistentes</div>
			<div class="accordion-content"><p>Se establece un valor diferente de costo para cada uno de los tipos de asistentes, adultos y menores, estos valores se calculan a partir del costo total del evento, y un porcentaje de este correspondiente a los asistentes menores, segun se lo indique debajo.</p></div>
		</li>
		<li class="accordion-container">
			<div input id="divisiongastado1" type="radio" class="accordion-header" name="" checked="" value="4">Se divide un valor fijo en partes iguales</div>
			<div class="accordion-content"><p>Se divide un valor fijo que representa el costo total, entre todos los asistentes sin distincion alguna.</p></div>
		</li>
		<li class="accordion-container">
			<div input id="divisionasistentefijo1" type="radio" class="accordion-header" name="" checked="" value="5">Se divide un valor fijo segun asistente</div>
			<div class="accordion-content"><p>Se establece un valor diferente de costo para cada uno de los tipos de asistentes, adultos y menores, estos valores se calculan a partir de un valor fijo que represental costo total del evento, y el costo correspondiente a los asistentes menores, se calculará como un porcentaje 
									 	 del costo de un asistente adulto, segun se lo indique debajo.</p></div>
		</li>
	</ul>	
	
	</div>
	<div class="col-xs-6 col-md-4">
		<!--dependiendo de la opcion muestro-->
		<div id="opcion1" style="display:none"></div>
			
			<div class="row">
				<div id="costofijoinvitado2" class="form-group" class="col-lg-4 control-label" >
						{{Form::label('Costo por invitado','',array('class'=>'col-lg-1 control-label'))}}
						{{ Form::input('number', 'costo') }}
						
				</div>
			</div> 
			<div class="row">
				<div id="costofijo2" class="form-group" class="col-lg-4 control-label" >
						{{Form::label('Menores','',array('class'=>'col-lg-1 control-label'))}}
						{{ Form::input('number', 'costo') }}
						</br>
						{{Form::label('Adultos','',array('class'=>'col-lg-1 control-label'))}}
						{{ Form::input('number', 'costo') }}
				</div>
			</div>
			<div class="row">
				<div id="division2" class="form-group" class="col-lg-4 control-label" >
				 colocar boton de aceptar este
					
				</div>
			</div>
			<div class="row">
				<div id="divisionasistentegastado2" class="form-group" class="col-lg-4 control-label" >
				
						<div class="col-lg-6"> <!--aca si los niños son 80%...los adultos son un 20%-->
						
						{{Form::label('Menores','',array('class'=>'col-lg-1 control-label'))}}
						{{ Form::input('number', 'costo') }}
						{{Form::label('Adultos','',array('class'=>'col-lg-1 control-label'))}}
						{{ Form::input('number', 'costo') }}
						</div>
					
				</div>
			</div>
			<div class="row">
				<div id="divisiongastado2" class="form-group" class="col-lg-4 control-label" >
						<div class="col-lg-6">						
						{{Form::label('Valor fijo','',array('class'=>'col-lg-1 control-label'))}}
						{{ Form::input('number', 'costo') }}						
						</div>
				</div>
			</div>
			<div class="row">
				<div id="divisionasistentefijo2" class="form-group" class="col-lg-4 control-label" >
						<div class="col-lg-6">
						{{Form::label('Valor a dividir','',array('class'=>'col-lg-1 control-label'))}}
						</div>
						<div>
						{{ Form::input('number', 'costo') }}
						{{Form::label('Adultos','',array('class'=>'col-lg-1 control-label'))}}
						{{ Form::input('number', 'costo') }}
						{{Form::label('Menores','',array('class'=>'col-lg-1 control-label'))}}
						{{ Form::input('number', 'costo') }}
						</div>
					
				</div>
			</div>
			
		</div>
	
	</div>
</div>
	
	
	
	
	<!--PARTE DE LOS INVITADOS-->
			
	<h1>INVITADOS</h1>
	
	
		
	<!-- Solo el organizador ve estos controles-->
	@if($usuarioInvitado->rol == 0)
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
							{{Form::radio('rol', '1', 'selected')}}
           
							{{Form::label('rol', 'Organizador')}}
							{{Form::radio('rol', '0')}}
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
						@if ( ($invitado->confirmado == 0) && ($invitado->id == $usuarioInvitado->id))
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalAsistencia">Asistir </button> 
							<!--COMIENZO MODAL ASISTIR-->
<div id="myModalAsistencia" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true
<!--capturoevento e invitado-->
	<div class="modal-dialog">
		<div class="modal-content"> 
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<bold><h2>Asistir</h2></bold>
		</div>
			{{Form::open(array('method' => 'POST', 'class'=>'form-horizontal', 'action' =>'InvitadoController@asistir' , 'role' => 'form'))}}
				<div class="modal-body">
		<input name="captura" type="hidden" value="{{$objEvento->id}}">				                                       
			<input name="capturainvitado" type="hidden" value="{{$invitado->id}}">	
			<!--Adultos-->

			<div class="form-group" class="col-lg-4 control-label" >
				{{Form::label('Adultos','',array('class'=>'col-lg-1 control-label'))}}

					{{ Form::input('number', 'adultos') }}

			</div>

			<div class="form-group" class="col-lg-4 control-label" >
				{{Form::label('Menores','',array('class'=>'col-lg-1 control-label'))}}

				{{ Form::input('number', 'menores') }}

				</div>

						<div class="form-group" class="col-lg-4 control-label" >
				{{Form::label('Gasto','',array('class'=>'col-lg-1 control-label'))}}

						{{ Form::input('number', 'gasto') }}

					</div>

						<!---->                

								</div>

								<div class="modal-footer">
										<div class="form-group">
												<div class="col-lg-10">
														{{Form::submit('Asistir', array('class' => 'btn btn-success'))}}
													</div>
													</div>					
								<a href="#" data-dismiss="modal" class="btn">Cancelar</a>
								</div>
				{{Form::close()}}

					</div>
		</div>
	</div><!-----FIN MODAL ASISTIR-->
						@else
							<a class="btn btn-info" href="/mail/{{$invitado->id}}" title="Envia un email"><i class="icon-envelope"></i>Enviar Mail</a>
							<a class="btn btn-info" href="" title="Envia la cuenta"><i class="icon-envelope"></i>Enviar Cuentas</a>
							<a class="btn btn-danger" href="/eliminarinvitado/{{$invitado->id}}" title="Eliminar invitado"><i class="icon-envelope"></i>Eliminar</a>
						@endif
					</td>		
				</tr>
				@endforeach
				
			
        </tbody>
    </table>
	</div>
	
	@else
	
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
					<th><label class="inline" >Accion</label></th>
					
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
					@if ( ($invitado->confirmado == 0) && ($invitado->id == $usuarioInvitado->id))
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalAsistencia">Asistir </button> </td>
						<!--COMIENZO MODAL ASISTIR-->
<div id="myModalAsistencia" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true
<!--capturoevento e invitado-->
	<div class="modal-dialog">
		<div class="modal-content"> 
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<bold><h2>Asistir</h2></bold>
		</div>
			{{Form::open(array('method' => 'POST', 'class'=>'form-horizontal', 'action' =>'InvitadoController@asistir' , 'role' => 'form'))}}
				<div class="modal-body">
		<input name="captura" type="hidden" value="{{$objEvento->id}}">				                                       
			<input name="capturainvitado" type="hidden" value="{{$invitado->id}}">	
			<!--Adultos-->

			<div class="form-group" class="col-lg-4 control-label" >
				{{Form::label('Adultos','',array('class'=>'col-lg-1 control-label'))}}

					{{ Form::input('number', 'adultos') }}

			</div>

			<div class="form-group" class="col-lg-4 control-label" >
				{{Form::label('Menores','',array('class'=>'col-lg-1 control-label'))}}

				{{ Form::input('number', 'menores') }}

				</div>

						<div class="form-group" class="col-lg-4 control-label" >
				{{Form::label('Gasto','',array('class'=>'col-lg-1 control-label'))}}

						{{ Form::input('number', 'gasto') }}

					</div>

						<!---->                

								</div>

								<div class="modal-footer">
										<div class="form-group">
												<div class="col-lg-10">
														{{Form::submit('Asistir', array('class' => 'btn btn-success'))}}
													</div>
													</div>					
								<a href="#" data-dismiss="modal" class="btn">Cancelar</a>
								</div>
				{{Form::close()}}

					</div>
		</div>
	</div><!-----FIN MODAL ASISTIR-->
					@endif

				</tr>
				@endforeach		
			
        </tbody>
    </table>
	</div>
@endif
	

	
	
	
	
	
	
	

	
<!-----------------------------------------------------------------MODALES--------------------------------------------------------------------------------->








<!-------------------------------------------------------------------------------------------------------------------------------------------------->
	
	
	
	<!-- LISTA DE ITEMS-->
	<h1>ITEMS-LISTA</h1>	
<!-- Solo el organizador ve estos controles-->
@if($usuarioInvitado->rol == 0)
		<!-- Aca SI es el creador puede agregar items... SINO si es invitado, que diga si lleva o no-->
	
	<div class="row">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalItem">Agregar Item </button> 
	</div>
					
	
	
	
	
	<div class="row">		
	<table id="table-items" class="table table-striped">
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
						@foreach ($listaDeItemsOk as $itemok)
							@foreach ($listaDeInvitados as $invitado)
								@if ($invitado->idusuario == $itemok->idusuario)
									@if($item->id == $itemok->iditem)
										{{$invitado->email}}
									@endif	
								@endif
							@endforeach
						@endforeach
					</td>           
					<td>
						Faltan:
						<?php $faltan = $item->cantidad; ?>
						@foreach ($listaDeItemsOk as $itemok)
							@if ($itemok->iditem == $item->id)
								<?php $faltan = $faltan - $itemok->cantidad?>								
							@endif
						@endforeach
						{{$faltan}}
						
					</td>
					<td> 
						<!--PREGUNTAR SI NO HAY LISTA DE INVITADOS, NO SE ASIGNA-->
						
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalAsigna{{$item->id}}">Asignar Item </button> 
						
						<a class="btn btn-danger"  href="/eliminaritem/{{$item->id}}" title="Elimina el item"><i class="icon-envelope"></i>Eliminar</a>
						
						<!-- MODAL -->
						<div id="myModalAsigna{{$item->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content"> 
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<bold><h2>Asignar Item</h2></bold>
											</div>
						{{Form::open(array('method' => 'POST', 'class'=>'form-horizontal', 'action' =>'ItemsokController@asignar' , 'role' => 'form'))}}
						<div class="modal-body">
			
							<!--Nombre-->
							<div class="form-group">									
								{{Form::label('Nombre Item')}}
								{{Form::text('nombre', $item->nombre, array('class' => 'form-control', 'placeholder' => 'Nombre'))}}					                                       
							</div>											
						   
							<!--Mail-->
							<div class="form-group">								
								{{Form::label('Email')}}							
								{{Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'email'))}}					                                       
							</div>
						
							<div class="form-group">
								{{Form::label('Cantidad')}}									
								{{Form::input('number','cantidad')}}   
							</div>	
							<input name="capturaevitok" type="hidden" value="{{$objEvento->id}}">	
							<input name="capturaiditem" type="hidden" value="{{$item->id}}">	
						</div>
			
							<div class="modal-footer">
								<div class="form-group">
										<div class="col-lg-10">
											{{Form::submit('asignar', array('class' => 'btn btn-success'))}}
										</div>
								</div>					
								<a href="#" data-dismiss="modal" class="btn">Cancelar</a>
							</div>
						{{Form::close()}}
		
								</div>
							</div>
						</div>	
					<!----------------------- FIN MODAL -->
						
					</td>
					
				</tr>
				@endforeach
			
        </tbody>
    </table>
	</div>
	
@else

	<div class="row">		
	<table id="table-items" class="table table-striped">
			<thead>
				<tr>
					<th><label class="inline" >Item</label></th>
					<th><label class="inline" >Cantidad Requerida</label></th>
					<th><label for="Invitees_email" class="required">Email <span class="required">*</span></label></th>							
					<th><label class="inline" >Falta</label></th>
					<th><label class="inline" >Acciones</label></th>
										
				</tr>
			</thead>
		<tbody> <!--no se esta mostrado!!!!!!!!!!!!!!!!!-->
				@foreach ($listaDeItems as $item )		
				<tr>
		            <td>{{$item->nombre}}</td>
					<td>{{$item->cantidad}}</td>		            
					<td>
						@foreach ($listaDeItemsOk as $itemok)
							@foreach ($listaDeInvitados as $invitado)
								@if ($invitado->idusuario == $itemok->idusuario)
									@if($item->id == $itemok->iditem)
										{{$invitado->email}}
									@endif	
								@endif
							@endforeach
						@endforeach
					</td>           
					<td>
						aca tiramos el resultado de lo requerido menos los items ok
					</td>
					<td> 
						<td><a class="btn btn-info" href="" title="Llevar"><i class="icon-envelope"></i>Yo llevo</a></td>
					</td>
					
				</tr>
				@endforeach
			
        </tbody>
    </table>
	</div>
@endif	
	
	
	
	
	
	<!-------------------------------------------------------------------------------------------------------->
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
			
<!----------------------------------------------------------------------------MODALES---------------------------------->


<!--Aca mi codigo de modal de AGREGAR ITEMS-->
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


<!---------------------------------------------------------------------->

</body>
@stop
</html>	

