@extends('layouts.base')

@section('contenido')

	hola, esto es una prueba

	@foreach($usuarios as $usuario)

		<p>Nombre:{{$usuario->nombre}}</p>
	@endforeach
	
@stop