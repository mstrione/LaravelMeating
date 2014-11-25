@extends('layouts.default')
@section('content')
{{Form::open(array('method'=>'POST','url'=>'/contacto','role'=>'form'))}} 
	<div class="container">
    	<div class="well">
        	<form class="form-horizontal" id="contacto">
				<fieldset>
					<legend>Consulta</legend>
						
							<!-- el primer parametro  es la URL a la que queremos enviar el formulario
							//el segundo parametro es el METHOD usado para enviar el formulario
							//el tercer parametro es opcional, si queremos el form con javascrip, paso el 'id'=>'miformulario' (por eso se pasa en array, para pasar el form con javascript.
							-->
						<div class "well">
						<div class="form-group" class="col-lg-4 control-label">
							{{Form::label('Nombre')}}
							{{Form::text('nombre','',array('class'=>'form-control'))}} 
						</div>
						</div>
		
						<div class="form-group" class="col-lg-4 control-label">
							{{Form::label('Email')}}
							{{ $errors->first('email')}}
							{{Form::text('email','',array('class'=>'form-control'))}} 
						</div>
						
						<div class="form-group" class="col-lg-4 control-label">
							{{Form::label('asunto','Asunto')}}
							{{ $errors->first('asunto')}}
							{{Form::text('asunto','',array('class'=>'form-control'))}} 
						</div>
		
						<div class="form-group" class="col-lg-4 control-label" >
							{{Form::label('consulta','Consulta')}}
							{{ $errors->first('consulta')}}
							{{Form::textarea('consulta','',array('class'=>'form-control'))}} 
						</div>
		
		
		
						<div class="form-group" class="col-lg-4 col-lg-offset-2">
							<p>{{Form::submit('Enviar', array('class' => 'btn btn-primary'))}}</p>
						</div>
         
					
				</fieldset>
			</form>
		</div>
	</div>		
{{Form::close()}}
	
@stop
