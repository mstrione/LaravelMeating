<html>
@extends('layouts.default')

<head>
@include('includes.headC')
	@if(!Session::has('usuario_id'))
		@stop
		@else
</head>
@section('content')

<body>
    <!--le da el cuerpo al body (valga la redundancia)--> <!--modificado en el css box-shadow-->



	<!--@$Nombre=$_REQUEST['Nombre'];
	@$Email=$_REQUEST['Email'];
	@$FechaNacimiento="1990-05-21";
	@$Sexo="Masculino";
	@$Provincia=$_REQUEST['Provincia'];
	@$Ciudad=$_REQUEST['Ciudad'];
	@$Password="12345";-->
	

    <div class="container"> 
    	<div class="well"> 
	        <div><h1 id="type"> Mis Eventos</h1></div>
            <div align="right"><a href="/crearEvento" class="btn btn-primary" >Agregar Evento +</a></div><br>		

            <table class='table table-striped table-hover'>
            	<thead>
            		
            		<th>NOMBRE</th>
            		<th>LUGAR</th>
            		<th>FECHA</th>
            		<th>ORGANIZADOR</th>
            		<th>ACCIONES</th>
            	</thead>
            	<tbody>
            		@foreach ($listaDeEventos as $evento )
					@if ($evento->creador == Session::get('usuario_id'))
            		<tr>
            				<td>{{$evento->nombre}}</td>
            				<td>{{$evento->direccion}}</td>
            				<td>{{$evento->fecha}}</td>
            				<td>{{$evento->creador}}</td> 
            				<td>
								<a class="btn btn-default" href="/evento/{{$evento->id}}"  title="Vista del evento"><span class="glyphicon glyphicon-eye-open"></span>
								<i class="icon-envelope"></i>Ver
								</a>
								
								<a class="btn btn-default" href="" title="Modifica el evento">
								<i class="icon-envelope"></i>Modificar
								</a>
								
								<a class="btn btn-default" href="" title="Borra el evento">
								<i class="icon-envelope"></i>Eliminar
								</a>
								
								</span>
							</td>		
            		</tr>
					@endif 
            		@endforeach
            	</tbody>
            </table>

 			




        </div>
  </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

@endif
@stop

</html>