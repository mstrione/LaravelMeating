<html>
@extends('layouts.1')
<head>
	@include('includes.headvistaevento')
	
</head>
@section('content')
{{Form::open(array('method' => 'POST', 'url' => '/contacto', 'role' => 'form'))}}

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
	
	
	<!--PARTE DE LOS INVITADOS-->
			
	<h1>INVITADOS</h1>
		<!-- Aca deberia poner un if preguntando SI es el creador...que muestre todo... sino, es invitado y solo ve algunas cosas-->
	<div class="row">
	<a href="agregarinvitado" class="btn btn-success" action="ValidarCantidad">Agregar Invitado</a>
	</div>
	<div class="row">
	<table id="table-invitados" class="table table-striped">
			<thead>
				<tr>
					<th><label class="inline" >Nombre</label></th>
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
				
				<tr>
					<td>
		             							
					
					</td>
		            <td>
		            
					</td>
		            
					<td>
					aca tiramos si es organizador
					</td>
		            
					<td>
						aca tiramos si asiste
					</td>
		            
					<td>
						aca tiramos cantidad de adultos
					</td>
		            
					<td>
						aca tiramos cantidad de niños
					</td>
		            
					<td>
		            	aca tiramos costo
					</td>
		            
					<td>
		            	aca tiramos el gasto	
					</td>
					
					<td>
		            	aca calculamos el balance
					</td>
		            
					<td>
		            	aca si esta saldado
					</td>
		            
					
			</tr>
			
        </tbody>
    </table>
	
	<!-- LISTA DE ITEMS-->
	<h1>ITEMS-LISTA</h1>	
		<!-- Aca SI es el creador puede agregar items... SINO si es invitado, que diga si lleva o no-->
	<div class="row">
	<a href="" class="btn btn-success" action="ValidarCantidad">Agregar Item</a>
	</div>				
	<div class="row">		
	<table id="table-invitados" class="table table-striped">
			<thead>
				<tr>
					<th><label class="inline" >Item</label></th>
					<th><label for="Invitees_email" class="required">Email <span class="required">*</span></label></th>					
					<th><label class="inline" >Requerido</label></th>
					<th><label class="inline" >Falta</label></th>
										
				</tr>
			</thead>
		<tbody>
						
				<tr>
		            <td>
		             aca tiramos los nombres de los items
					</td>
		            
					<td>
					aca tiramos el mail de quien asignamos el item
					</td>
		            
					<td>
						aca colocamos la cantidad necesaria
					</td>
		            
					<td>
						aca tiramos el resultado de lo requerido menos los items ok
					</td>
					
			</tr>
			
        </tbody>
    </table>
	</div>
	
	<div class="row"> 
            <h1 class="subheader">Subir imágenes </h1>
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
              
                {{ Form::open(array('url' => 'Evento', 'files' => true)) }}
 
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
