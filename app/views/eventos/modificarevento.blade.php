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
	<legend>Modificar Evento</legend>
	
		<div class="row">
			<div class="col-md-6">
				<!--Nombre Evento-->
					
						<div class="form-group">
							{{Form::label('Nombre Evento')}}
							
							{{Form::text('nombre','' , array( 'class' => 'form-control'))}} <!--asi es para poder hacer lo mismo con el modificar-->
							
							
						</div>
				  
					<!--Lugar-->
						<div class="form-group">
							{{Form::label('Lugar')}}
							
							{{Form::text('direccion', '', array( 'class' => 'form-control'))}}
							
							
						</div>
                                   
					<!--Fecha-->
                        <div class="form-group">
							{{Form::label('Fecha')}}
							
							{{ Form::input('date','',' ',array( 'date_format' => 'yyyy-mm-dd')) }}
							
						</div>
  
					<!--Hora-->
                        <div class="form-group">
							{{Form::label('Hora')}}
							
							{{ Form::input('time','','',array( 'time_format' => 'HH:mm:ss')) }}
							
						</div>
						
					<!--Descripcion-->
                        <div class="form-group">
							{{Form::label('Descripcion')}}
							
							{{Form::textarea('descripcion','',array('class'=>'form-control'))}}
							
						</div>
  
  
  
			</div>
			<div class="col-md-6">
  					<!--Mapa de Gmap-->                  
						<div class="form-group">		
							
														
						</div>						
                
  
			</div>
	</div>
	
	@else
	@endif
				
</body>
@stop
</html>	

