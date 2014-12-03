@extends('layouts.1')

@section('content')

	<h1>BIENVENID@</h1>

	<p>Buenasss {{Session::get('user_username')}}</p>
	<p><a href="/logout">¿Salir?</a></p>

@stop