<!doctype html>
<html>

<body>
	<div class="container">

	<header class="row">
		@include('includes.headL')
		
		@if(!Session::has('usuario_id'))		
				@include('includes.header')
			@else
				<p>¡Hola {{Session::get('usuario_username')}}!, has iniciado tu sesion!.</p>
				@include('includes.headersesion')
		@endif
		
	</header>

	<div id="main" class="row">		
			@yield('content')
	</div>

	<footer class="row">
		@include('includes.footer')
	</footer>
	<!-- JS -->
	<script src="{{ URL::asset('js/jquery-2.1.1.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/StyleComun.css" rel="stylesheet">
		<link href="css/StyleIndex.css" rel="stylesheet">
		
		<!-- JS -->
			<script src="{{ URL::asset('js/jquery-2.1.1.js') }}"></script>
			<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script src="{{ URL::asset('js/vallenato.js') }}"></script>
		

		<link href="{{ URL::asset('css/vallenato.css') }}" rel="stylesheet">

	</div>
	<script> 
		$( "#costofijo1" ).click(function() {
		  $( "#costofijo2" ).toggle(  );
		  alert("1");
		});
		$( "#division1" ).click(function() {
		  $( "#division2" ).toggle(  );
		  alert("2");
		});
		$( "#divisionasistentegastado1" ).click(function() {
		  $( "#divisionasistentegastado2" ).toggle(  );
		  alert("3");
		});
		$( "#divisiongastado1" ).click(function() {
		  $( "#divisiongastado2" ).toggle(  );
		  alert("4");
		});
		$( "#divisionasistentefijo1" ).click(function() {
		  $( "#divisionasistentefijo2" ).toggle(  );
		  alert("5");
		});
	
	</script>
</body>
</html>