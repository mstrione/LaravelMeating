@extends('layouts.default')
<head>
	@include('includes.headC')
	
</head>
@section('content')
<div class="page-header">
    <div class="container" id="page">
    <h1>Crear evento</h1>
    </div>    
</div>
{{Form::open(array('method'=>'POST','url'=>'pages/crearEvento','role'=>'form'))}}

			<div class "row">
				<div class="form-group" class="col-lg-4 control-label">
						{{Form::label('Nombre')}}
						{{Form::text('nombre','',array('class'=>'form-control'))}} 
				</div>
			</div>
	
			<div class "row">
				<div class="form-group" class="col-lg-4 control-label">
						{{Form::label('Lugar')}}
						{{Form::text('direccion','',array('class'=>'form-control'))}} 
				</div>
			</div>
			
			<!--
			<div class "row">
				<div class="form-group" class="col-lg-4 control-label">
						<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
							<input class="span2" size="16" type="text" value="12-02-2012">
							<span class="add-on"><i class="icon-th"></i></span>
						</div> 
				</div>
			</div>
			
			<div class "row">
				<div class="form-group" class="col-lg-4 control-label">
						{{Form::label('Hora')}}
						{{Form::text('hora','',array('class'=>'form-control'))}} 
				</div>
			</div>
			-->
			<div class "row">
				<div class="form-group" class="col-lg-4 control-label">
						{{Form::label('Descripcion')}}
						{{Form::textarea('descripcion','',array('class'=>'form-control'))}} 
				</div>
			</div>
			<!--ACA INSERTO LO DEL MAPA-->
			
			<!--ACA deberia ir algun CAPTCHA-->
			
			<div class="form-group" class="col-lg-4 col-lg-offset-2">
				<p>{{Form::submit('Crear Evento', array('class' => 'btn btn-primary'))}}</p>
			</div>
			
{{Form::close()}}
	
@stop
