@extends('layouts.1')
	
<head>
	@include('includes.headC')
	@if(!Session::has('usuario_id'))
		@stop
		@else
	
	{{ HTML::script('js/datepicker.js') }}
	{{ HTML::script('js/MapaCrearEvento.js') }}
	{{ HTML::style('css/datepicker.css') }}
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=set_to_true_or_false"></script>
<script type="text/javascript">
  function initialize() {
    var myLatlng = new google.maps.LatLng(-41.1346338, -71.30934969999998);
    var myOptions = {
      zoom: 15,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map($("#map_canvas").get(0), myOptions);
    var marker = new google.maps.Marker({
      position: myLatlng,
	  draggable: true,
      map: map,
      title:"Lugar de evento"
  });
  }
 
</script >

<script type="text/javascript">
var map = null;
var infoWindow = null;
 
function openInfoWindow(marker) {
    var markerLatLng = marker.getPosition();
    infoWindow.setContent([
        '&lt;b&gt;La posicion del marcador es:&lt;/b&gt;&lt;br/&gt;',
        markerLatLng.lat(),
        ', ',
        markerLatLng.lng(),
        '&lt;br/&gt;&lt;br/&gt;Arr&amp;aacute;strame y haz click para actualizar la posici&amp;oacute;n.'
    ].join(''));
    infoWindow.open(map, marker);
}
 
function initialize() {
    var myLatlng = new google.maps.LatLng(20.68017,-101.35437);
    var myOptions = {
      zoom: 13,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
 
    map = new google.maps.Map($(&quot;#map_canvas&quot;).get(0), myOptions);
 
    infoWindow = new google.maps.InfoWindow();
 
    var marker = new google.maps.Marker({
        position: myLatlng,
        draggable: true,
        map: map,
        title:&quot;Ejemplo marcador arrastrable&quot;
    });
 
    google.maps.event.addListener(marker, 'click', function(){
        openInfoWindow(marker);
    });
}
 
$(document).ready(function() {
    initialize();
});
</script>















</head>
@section('content')
<div class="page-header">
    <div class="container" id="page">
    <h1>CREAR EVENTO</h1>
    </div>    
</div>
<div class="jumbotron">
{{Form::open(array('method'=>'POST','Action'=> '/MisEventos' ,'role'=>'form','class'=>'form-horizontal'))}}

<fieldset>
			
			<!--Nombre del evento-->
			<div class="row">
				<div class="form-group" >
						{{Form::label('Nombre','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-6">
						{{Form::text('nombreevento','',array('class'=>'form-control'))}} 
						</div>
				</div>
			</div>
	
	
			<!--FECHA Y HORA-->
			
          
				<div class="row">
				<div class="form-group"  >
					{{Form::label('Fecha','',array('class'=>'col-lg-1 control-label'))}}
					<div class="col-lg-10">
					{{ Form::input('date','fecha',' ',array( 'date_format' => 'yyyy-mm-dd')) }}					
					</div>					
				</div>
				</div>
			
			
			<div class="row">
				<div class="form-group"  >
						{{Form::label('Hora','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-10">
						{{ Form::input('time','hora','',array( 'time_format' => 'HH:mm:ss')) }}					
						</div>
				</div>
			</div>
			
	
			<div class="row">
				<div class="form-group" >
						{{Form::label('Descripcion','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-6">
						{{Form::textarea('descripcion','',array('class'=>'form-control'))}}
						</div> 
				</div>
			</div>
	
	
			<div class="row">
				<div class="form-group" class="col-lg-4 control-label">
						{{Form::label('Lugar','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-6">
						{{Form::text('direccion','',array('class'=>'form-control'))}} 
						</div>
				</div>
			</div>
			
			<!--ACA INSERTO LO DEL MAPA-->
			
				<body onload="initialize()">
					
								<div id="map_canvas" style="width: 700px; height: 300px;"></div>
								<br/>							
				</body>
				<div id='map_canvas' style="width:600px; height:400px;"></div>
			
			
			</br> 
			
			<div class="row">
				<div class="form-group" class="col-lg-4 control-label" >
						{{Form::label('Adultos','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-6">
						{{ Form::input('number', 'adultosmax') }}
						</div>
				</div>
			</div>
			

			<div class="row">
				<div class="form-group" class="col-lg-4 control-label" >
						{{Form::label('Menores','',array('class'=>'col-lg-1 control-label'))}}
						<div class="col-lg-6">
						{{ Form::input('number', 'menoresmax') }}
						</div>
				</div>
			</div>
			
			
	
			
	
			
			
			<div class="form-group" class="col-lg-4 col-lg-offset-2">
				<p>{{Form::submit('Crear Evento', array('class' => 'btn btn-primary'))}}</p>
			</div>
		</fieldset>	
{{Form::close()}}
</div>
	
			
@endif
@stop
