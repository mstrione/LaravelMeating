//Login.Blade.php --ESTE ES EL VIEW PARA LOGUEARSE

@extends('layouts.base')

@section ('content')
		{{Form::open(array('url'=> 'Aca va la url del login','method'=>'POST','role'=>'form'))}} 
			// el primer parametro  es la URL a la que queremos enviar el formulario
			//el segundo parametro es el METHOD usado para enviar el formulario
			//el tercer parametro es opcional, si queremos el form con javascrip, paso el 'id'=>'miformulario' (por eso se pasa en array, para pasar el form con javascript.
		
		
		<div class="form-group" class="col-lg-2 control-label">
			{{Form::label('Email')}}
			{{Form::text('email','',array('class'=>'form-control'))}} 
		</div>
		<div class="form-group" class="col-lg-2 control-label">
			{{Form::label('Contraseña')}}
			{{Form::password('password',array('class'=>'form-control'))}}
			// si no le pasamos la clase podemos poner {{Form::password('password')}} que es lo mismo que poner <?php echo Form::password('password');?>
		</div>
		
		<div class="form-group" class="col-lg-4 col-lg-offset-2">
			<p>{{Form::submit('Registrarme', array('class' => 'btn btn-primary'))}}</p>
		</div>
         
		 {{Form::close()}}

@stop

//REVISAR Y VER SI FUNCIONA BIEN EL PASAJE DE LAS CLASES