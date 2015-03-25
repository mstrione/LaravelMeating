<!doctype html>
<html>

<body>
<div class="container">

	<header class="row">
		
		@if(!Session::has('usuario_id'))
		
				@include('includes.header')
			@else				
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

</div>
</body>
</html>