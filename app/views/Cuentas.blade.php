
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">

		<title>Cuentas</title>

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
		

		<link href="css/vallenato.css" rel="stylesheet">

		
		
		
	</head>
	
	
<body>
<div class="row">
  <div class="col-xs-12 col-md-8">
	<ul >
		<li class="accordion-container">
			<div input type="radio" class="accordion-header" name="" checked="" value="0" action="onclick" <!--aca mandaria al javascript con la opcion -->El organizador invita</div>
			<div class="accordion-content"><p>El evento no tiene costo alguno para los invitados</p></div>
		</li>
		<li class="accordion-container">
			<div input type="radio" class="accordion-header" name="" checked="" value="1">Se establece un costo fijo segun asistente</div>
			<div class="accordion-content"><p>Se distinguen dos valores fijos de costo para cada uno de los tipos de asistentes respectivamente, adultos y menores, tambien independientemente del costo total del evento.</p></div>
		</li>
		<li class="accordion-container">
			<div input type="radio" class="accordion-header" name="" checked="" value="2">Se divide lo gastado en partes iguales</div>
			<div class="accordion-content"><p>Se divide el costo total del evento entre todos los asistentes sin distincion alguna.</p></div>
		</li>
		<li class="accordion-container">
			<div input type="radio" class="accordion-header" name="" checked="" value="3">Se divide lo gastado segun asistentes</div>
			<div class="accordion-content"><p>Se establece un valor diferente de costo para cada uno de los tipos de asistentes, adultos y menores, estos valores se calculan a partir del costo total del evento, y un porcentaje de este correspondiente a los asistentes menores, segun se lo indique debajo.</p></div>
		</li>
		<li class="accordion-container">
			<div input type="radio" class="accordion-header" name="" checked="" value="4">Se divide un valor fijo en partes iguales</div>
			<div class="accordion-content"><p>Se divide un valor fijo que representa el costo total, entre todos los asistentes sin distincion alguna.</p></div>
		</li>
		<li class="accordion-container">
			<div input type="radio" class="accordion-header" name="" checked="" value="5">Se divide un valor fijo segun asistente</div>
			<div class="accordion-content"><p>Se establece un valor diferente de costo para cada uno de los tipos de asistentes, adultos y menores, estos valores se calculan a partir de un valor fijo que represental costo total del evento, y el costo correspondiente a los asistentes menores, se calculará como un porcentaje 
									 	 del costo de un asistente adulto, segun se lo indique debajo.</p></div>
		</li>
	</ul>	
	
	</div>
	<div class="col-xs-6 col-md-4">
		<!--dependiendo de la opcion muestro-->
		<div id="opcion1" style="display:none"></div>
	Aca pondre un container o tarjeta donde me aparezcan los porcentajes
			<div class="row">
				<div class="form-group" class="col-lg-4 control-label" >
						{{Form::label('Costo por invitado','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-6">
						{{ Form::input('number', 'costo') }}
						</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group" class="col-lg-4 control-label" >
						{{Form::label('Costo por asistente','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-6">
						{{ Form::input('number', 'costo') }}
						</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group" class="col-lg-4 control-label" >
						{{Form::label('Dividir lo gastado en partes iguales','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-6">
						
						</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group" class="col-lg-4 control-label" >
						{{Form::label('Se divide lo gastado segun asistentes','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-6">
						{{ Form::input('number', 'costo') }}
						</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group" class="col-lg-4 control-label" >
						{{Form::label('Valor a dividir en partes iguales','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-6">
						{{ Form::input('number', 'costo') }}
						</div>
				</div>
			</div>
	</br>sasdfasdf
	</br>sasdfasdf
	</br>sasdfasdf
	
	</br>sasdfasdf
	</div>
</div>
	
</body>

</html>