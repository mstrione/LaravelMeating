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
	{{Form::open(array('method' => 'POST', 'class'=>'form-horizontal', 'action' =>'EventoController@modificarelevento' , 'role' => 'form'))}}
		<div class="row">
			<div class="col-md-6">
				<input name="capturaevent" type="hidden" value="{{$eventomodid->id}}">				                                       
				<!--Nombre Evento-->
					
						<div class="form-group">
							{{Form::label('Nombre Evento')}}							
							{{Form::text('nombre',$eventomodid->nombre , array( 'class' => 'form-control'))}} <!--asi es para poder hacer lo mismo con el modificar-->
														
						</div>				  
					<!--Lugar-->
						<div class="form-group">
							{{Form::label('Lugar')}}							
							{{Form::text('direccion', $eventomodid->direccion, array( 'class' => 'form-control'))}}						
						</div>                                   
					<!--Fecha-->
                        <div class="form-group">
							{{Form::label('Fecha')}}							
							{{ Form::input('date','fecha',$eventomodid->fecha ,array( 'date_format' => 'yyyy-mm-dd')) }}							
						</div>  
					<!--Hora-->
                        <div class="form-group">
							{{Form::label('Hora')}}							
							{{ Form::input('time','hora',$eventomodid->hora,array( 'time_format' => 'HH:mm:ss')) }}						
						</div>						
					<!--Descripcion-->
                        <div class="form-group">
							{{Form::label('Descripcion')}}
							
							{{Form::textarea('descripcion',$eventomodid->descripcion,array('class'=>'form-control'))}}
							
						</div>
  
  
  
			</div>
			
  					<!--Mapa de Gmap-->                  
						<div class="form-group">		
							
														
						</div>								
			
				<div class="form-group"  >
						{{Form::label('Adultos','',array('class'=>'col-lg-1 control-label'))}}						
						{{ Form::input('number','adultosmax',$eventomodid->adultosmax) }}						
				</div>		
				
				<div class="form-group"  >
						{{Form::label('Menores','',array('class'=>'col-lg-1 control-label'))}}						
						{{ Form::input('number','menoresmax', $eventomodid->menoresmax) }}						
				</div>
			
			{{Form::submit('Modificar', array('class' => 'btn btn-success'))}}
	</div>
	{{Form::close()}}
	
	@else
	@endif
				
</body>
@stop
</html>	

