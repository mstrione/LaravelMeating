@extends('layouts.default')

@include('includes.headC')

@section('content')
<!-- DATOS DEL EVENTO -->
   <div class="container">         
    <div class="columna-1">
        <h2>Datos del evento</h2><br/>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Nombre:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Lugar:</th>
                    <td></td>
                </tr>
				                
				<tr>
                    <th>Fecha:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Hora:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Descripción:</th>
                    <td></td>
                </tr>
				<tr>
                    <th>Cerrado:</th>
                    <td></td>
                </tr>
				<tr>
                    <th>Metodo Cuenta:</th>
                    <td></td>
                </tr>
				<tr>
                    <th>Cantidad de menores:</th>
                    <td></td>
                </tr>
				<tr>
                    <th>Cantidad de adultos:</th>
                    <td></td>
                </tr>
				<tr>
                    <th>Cantidad de menores:</th>
                    <td></td>
                </tr>
				<tr>
                    <th>Creador del evento:</th>
                    <td>---------------aca irian los datos llamados ---------------</td>
                </tr>
				<!--mapa con latitud y longitud-->
				
				<!-- MAPA -->
				<tr>
				<div class="columna-2" >
				<br/><br/>
					<div class="row">
						<div id="map">
						</div>	
					</div>
				</div>
    
				<div style="clear:both;"></div>
				</div>
				</tr>
				
				</br>
				
				
            </tbody>
        </table>
    </div>
	
	<!---------------------------Muro de mensajes------------------------>
	
	
	
    
    
	
			<!-- PARTE DE LAS CUENTAS Form::checkbox('name', 'value');-->
		
<h1> MURO DE MENSAJES </h1>		




<h1>CUENTAS NO VA</h1>
	
	
	
	
			<div class=accordion-container>
				<div>
				{{ Form::radio('metodo', '1', (Input::old('metodo') == '1'), array('id'=>'male', 'class'=>'accordion-header'))}}	
				{{Form::label('El organizador invita')}}	
					
				</div>
				
				<div>
				{{Form::radio('metodo', '2', (Input::old('metodo') == '2'), array('id'=>'female', 'class'=>'accordion-header'))}}
				{{Form::label('Se establece un valor fijo')}}				
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
						
				<tr>
		            <td>
		             aca tiramos el mail
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
	
		
        
	<hr>
	
	

			
			<!-- LISTA DE ITEMS-->
	<h1>ITEMS-LISTA</h1>	
		<div class="row">
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




@stop