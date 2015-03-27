@extends('layouts.1')
	
<head>
	@include('includes.headC')
	@if(!Session::has('usuario_id'))
		@stop
		@else
	{{ HTML::script('js/vallenato.js') }}
	{{ HTML::style('css/vallenato.css') }}
	{{ HTML::script('js/datepicker.js') }}
	{{ HTML::script('js/MapaCrearEvento.js') }}
	{{ HTML::style('css/datepicker.css') }}
	{{ HTML::style('css/EstiloMapa.css') }}
	 
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script> <script >google.maps.event.addDomListener(window, 'load', initialize);	</script>
</head>
@section('content')
<div class="page-header">
    <div class="container" id="page">
    <h1>CREAR EVENTO</h1>
    </div>    
</div>
<div class="jumbotron">
{{Form::open(array('method'=>'POST','Action'=> '/MisEventos' ,'role'=>'form','class'=>'form-horizontal'))}}

<fieldset>
			
			
			<div class "row">
				<div class="form-group" >
						{{Form::label('Nombre','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-10">
						{{Form::text('nombre','',array('class'=>'form-control'))}} 
						</div>
				</div>
			</div>
	
	
			<!--FECHA Y HORA-->
			
          
				<div class="row">
				<div class="form-group"  >
					{{Form::label('Fecha','',array('class'=>'col-lg-1 control-label'))}}
					<div class="col-lg-10">
					{{ Form::input('date','Fecha','',array( 'date_format' => 'yyyy-mm-dd')) }}
					{{ Form::input('date', 'fecha') }}
					<!--Form::text('fecha','',array('class'=>'form-control','class'=>'input-append date','data-date-format'=>'dd-mm-yyyy'))-->
					</div>
					<span class="add-on"><i class="icon-th"></i></span>
				</div>
				</div>
			
			
			<div class "row">
				<div class="form-group"  >
						{{Form::label('Hora','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-10">
						{{ Form::input('time', 'hora','',array( 'time_format' => 'HH:mm:ss')) }}
						{{ Form::input('time', 'hora') }}
						<!--Form::text('hora','',array('class'=>'form-control')) -->
						</div>
				</div>
			</div>
			
	
			<div class "row">
				<div class="form-group" >
						{{Form::label('Descripcion','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-10">
						{{Form::textarea('descripcion','',array('class'=>'form-control'))}}
						</div> 
				</div>
			</div>
	
	
			<div class "row">
				<div class="form-group" class="col-lg-4 control-label">
						{{Form::label('Lugar','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-10">
						{{Form::text('direccion','',array('class'=>'form-control'))}} 
						</div>
				</div>
			</div>
			
			<div class "row">
				<div class="form-group" class="col-lg-4 control-label" >
						{{Form::label('Adultos','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-10">
						{{ Form::input('number', 'adultosmax') }}
						</div>
				</div>
			</div>

			<div class "row">
				<div class="form-group" class="col-lg-4 control-label" >
						{{Form::label('Menores','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-10">
						{{ Form::input('number', 'menoresmax') }}
						</div>
				</div>
			</div>
			
			
	
			<!--ACA INSERTO LO DEL MAPA-->
	<div class="row">
	<dic class='col-lg-10'>
	<div id="panel">
      <input onclick="clearMarkers();" type=button value="ocultar marcadores">
      <input onclick="showMarkers();" type=button value="mostrar marcadores">
      <input onclick="deleteMarkers();" type=button value="borrar marcadores">
    </div>
    </div>
    <div id="map-canvas"></div>
    <p>click en el mapa para agregar marcadores.</p>
			</dic>
			
			
			<div class="form-group" class="col-lg-4 col-lg-offset-2">
				<p>{{Form::submit('Crear Evento', array('class' => 'btn btn-primary'))}}</p>
			</div>
		</fieldset>	
{{Form::close()}}
</div>
	
			<!-- PARTE DE LAS CUENTAS Form::checkbox('name', 'value');-->
		
<h1> CUENTAS </h1>		
	
	
	
			
			<div class="accordion-container">			
				<div>
				{{ Form::radio('metodo', '1', (Input::old('metodo') == '1'), array('id'=>'male', 'class'=>'accordion-header'))}}	
				{{Form::label('El organizador invita')}}	
				<div class=""><p>El evento no tiene costo alguno para los invitados</p></div>
				</div>
				
				<div>
				{{Form::radio('metodo', '2', (Input::old('metodo') == '2'), array('id'=>'female', 'class'=>'accordion-header'))}}
				{{Form::label('Se establece un valor fijo')}}	
				<div class=""><p>Se distinguen dos valores fijos de costo para cada uno de los tipos de asistentes respectivamente, adultos y menores, tambien independientemente del costo total del evento.</p></div>
				</div>
				
				<div>
				{{ Form::radio('metodo', '3', (Input::old('metodo') == '3'), array('id'=>'male', 'class'=>'accordion-header'))}}	
				{{Form::label('Se establece un valor fijo por asistente')}}				
				</div>
				
				<div>
				{{Form::radio('metodo', '4', (Input::old('metodo') == '4'), array('id'=>'female', 'class'=>'accordion-header'))}}
				{{Form::label('Se divide lo gastado en partes iguales')}}				
				</div>
				
				<div>
				{{Form::radio('metodo', '5', (Input::old('metodo') == '5'), array('id'=>'male', 'class'=>'accordion-header'))}}	
				{{Form::label('Se divide lo gastado según asistentes')}}
				
				</div>
				
				<div>
				{{Form::radio('metodo', '6', (Input::old('metodo') == '6'), array('id'=>'female', 'class'=>'accordion-header'))}}
				{{Form::label('Se divide un valor arbitrario en partes iguales')}}				
				</div>
				
				<div>
				{{Form::radio('metodo', '7', (Input::old('metodo') == '7'), array('id'=>'female', 'class'=>'accordion-header'))}}
				{{Form::label('Se divide un valor arbitrario según asistentes')}}				
				</div>
			</div>
			
	
	<!--
	<ul >
		<li class="accordion-container">
		
			<div input type="radio" class="accordion-header" name="" checked="true" value="0">El organizador invita</div>
			<div class="accordion-content"><p>El evento no tiene costo alguno para los invitados</p></div>
		</li>
		<li class="accordion-container">
			<div input type="radio" class="accordion-header" name="" checked="" value="1">Se establece un costo fijo segun asistente</div>
			<div class="accordion-content"><p>Se distinguen dos valores fijos de costo para cada uno de los tipos de asistentes respectivamente, adultos y menores, tambien independientemente del costo total del evento.</p></div>
		</li>
		<li class="accordion-container">
			<div input type="radio" class="accordion-header" name="" checked="" value="2">Se divide lo gastado en partes iguales</div>
			<div class="accordion-content"><p>Se divide el costo total del evento entre todos los asistentes sin distincion alguna.</p></div>
		</li>
		<li class="accordion-container">
			<div input type="radio" class="accordion-header" name="" checked="" value="3">Se divide lo gastado segun asistentes</div>
			<div class="accordion-content"><p>Se establece un valor diferente de costo para cada uno de los tipos de asistentes, adultos y menores, estos valores se calculan a partir del costo total del evento, y un porcentaje de este correspondiente a los asistentes menores, segun se lo indique debajo.</p></div>
		</li>
		<li class="accordion-container">
			<div input type="radio" class="accordion-header" name="" checked="" value="4">Se divide un valor fijo en partes iguales</div>
			<div class="accordion-content"><p>Se divide un valor fijo que representa el costo total, entre todos los asistentes sin distincion alguna.</p></div>
		</li>
		<li class="accordion-container">
			<div input type="radio" class="accordion-header" name="" checked="" value="5">Se divide un valor fijo segun asistente</div>
			<div class="accordion-content"><p>Se establece un valor diferente de costo para cada uno de los tipos de asistentes, adultos y menores, estos valores se calculan a partir de un valor fijo que represental costo total del evento, y el costo correspondiente a los asistentes menores, se calculará como un porcentaje 
									 	 del costo de un asistente adulto, segun se lo indique debajo.</p></div>
		</li>
	</ul>	
			
			
			-->
			
			
			
			<!--PARTE DE LOS INVITADOS-->
			
	<h1>INVITADOS</h1>
			
	<div class="row">
		<div>
		<h2 class="inline">Invitados <a data-toggle="modal" href="/agregarinvitado" class="btn btn-primary btn-large"> <!-- en href deberia ponerse la direccion donde se encuentra el popup, en este caso es id=example-->
		Agregar Invitado
		</a></a></h2>
		
		
		
		<div class="inline pull-right">
			<label class="inline" for="Events_confirmation_closed">Confirmación Cerrada</label>	
			<input id="ytEvents_confirmation_closed" type="hidden" value="0" name="Events[confirmation_closed]" />
			<input class="inline" name="Events[confirmation_closed]" id="Events_confirmation_closed" value="1" type="checkbox" />
			<div class="errorMessage" id="Events_confirmation_closed_em_" style="display:none"></div>
		</div>		
			
			
			
			
			
			
			
			
	
	<table id="table-invitados" class="table table-striped" > 
			<thead>
				<tr>
					<th><label>Email*</label></th>
					<th><label>Organizador</label></th>
					<th><label>Asistirá</label></th>
					<th><label>Adultos</label></th>
					<th><label>Niños</label></th>
					<th><label>$ Costo</label></th>
					<th><label>$ Gastó</label></th>
					<th><label>$ Balance</label></th>
					<th><label>Saldado</label></th>
					<th colspan="3"><label>Acciones</label></th>
				</tr>
			</thead>
		<tbody>
						
				<tr>
		            <td>						
		             {{Form::text('email', '', array('class' => 'form-control'))}}   
					</td>		            
					<td>
						{{Form::checkbox('organizador', 'true')}}
					</td>		            
					<td>
						{{Form::checkbox('confirmado', 'true')}}
					</td>		            
					<td>
						{{Form::input('number','adultos')}}
					</td>		            
					<td>
						{{Form::input('number','niños')}}
					</td>		            
					<td>		            	
						{{Form::input('number','costo')}}
					</td>		            
					<td>		            	
						{{Form::input('number','gasto')}}	
						</td>					
					<td>		            	
						{{Form::input('number','balance')}}
					</td>		            
					<td>
		            	{{Form::checkbox('confirmado', 'true')}}
					</td>
		            
					<td class="buttons">
		            	<a class="btn btn-default" href="#mailInvitee" title="mail cuentas o invitacion">
		            		<i class="icon-envelope"></i>Enviar mail
		            	</a>
		            </td>
		            
					<td class="buttons">
		            	<a class="btn btn-danger remove-invitee" href="#removeInvitee" title="remove" >
		            		<i class="icon-remove"></i> Remover
		            	</a>
		            </td>
			</tr>
			
        </tbody>
    </table>
	</div>
	</div>
	
		<a class="btn btn-info pull-right " href="#resendInvitation" title="Reenviar invitaciones a no confirmados" type="">
		<i class="icon-envelope"></i> Reenviar invitaciones</a>
		<a class="btn btn-info pull-right " href="#sendBills" title="Enviar cuentas a confirmados" type="">
		<i class="icon-envelope"></i> Enviar cuentas</a>
    </div>
        
	<hr>
			
			<!-- LISTA DE ITEMS-->
	<h1>ITEMS-LISTA</h1>	
		<div class="row">
		<h2 class="inline">Lista de items <a id="add-item" class="btn btn-success" href="#addItem">	<i class="icon-plus"></i></a>
			
			<table class='table table-striped table-hover'>
            	<thead>
            		
            		<th>NOMBRE ITEM</th>
            		<th>TRAE</th>
            		<th>CANTIDAD</th>
            		<th>FALTAN</th>
            		<th>ACCIONES</th>
            	</thead>
            	<tbody>
            		
            		<tr>
            			<td>						
							{{Form::text('item', '', array('class' => 'form-control'))}}   
						</td>		            
						<td>
							{{Form::text('item', '', array('class' => 'form-control'))}}  
						</td>		            
						<td>
							{{Form::input('number','cantidad')}}
						</td>		            
						<td>
							{{Form::input('number','faltan')}}
						</td>		            
								
            				<td>
								<a class="btn btn-default" href="#mailInvitee" title="mail cuentas o invitacion">
								<i class="icon-envelope"></i>Yo llevo
								</a>
								
								<a class="btn btn-default" href="#mailInvitee" title="mail cuentas o invitacion">
								<i class="icon-envelope"></i>Asignar
								</a>
								
								<a class="btn btn-default" href="#mailInvitee" title="mail cuentas o invitacion">
								<i class="icon-envelope"></i>Eliminar
								</a>
								</span>
							</td>		
            		</tr>
            		
            	</tbody>
            </table>
			<!--FOTOS-->
<!--
			<div class="row fileupload-buttonbar">
	<div class="span7"> -->
		<!-- The fileinput-button span is used to style the file input field as button -->
		<!--<span class="btn btn-success fileinput-button">
            <i class="icon-plus icon-white"></i>
            <span>Elegir Archivos</span>
			<input id="ytXUploadForm_file" type="hidden" value="" name="XUploadForm[file]" /><input multiple="multiple" name="XUploadForm[file]" id="XUploadForm_file" type="file" />
		</span>
        		<button type="submit" class="btn btn-primary start">
			<i class="icon-upload icon-white"></i>
			<span>Iniciar subida</span>
		</button>
		<button type="reset" class="btn btn-warning cancel">
			<i class="icon-ban-circle icon-white"></i>
			<span>Cancelar subida</span>
		</button>
		<button type="button" class="btn btn-danger delete">
			<i class="icon-trash icon-white"></i>
			<span>Eliminar</span>
		</button>
		<input type="checkbox" class="toggle">
        	</div>
	
</div>-->
@endif
@stop
