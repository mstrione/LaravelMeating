@extends('layouts.default')
<head>
	@include('includes.headPopItem')
</head>
@section('content')
<!--{{Form::open(array('method'=>'POST','url'=>'/contacto','role'=>'form'))}} -->
		<a data-toggle="modal" href="app/views/pages" class="btn btn-primary btn-large"> <!-- en href deberia ponerse la direccion donde se encuentra el popup, en este caso es id=example-->
		Agregar Item
		</a>
  	<!--Lo de arriba es el boton que deberia ir en la pagina del evento para poder agregar el item
	LUEGO, el codigo que sigue, estaria en otra pagina para que salte como popup.-->
	<!--<div id="itempop" class="modal fade">-->
   <div class="modal-dialog">   
      <div class="modal-content"> 
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            ×
            </button>
            <bold><h2>AGREGAR ITEM</h2></bold>
         </div>
         <div class="modal-body">
            
            <span class="label label-primary">Ingrese Nombre de item y luego la cantidad total. Por ejemplo:</span>
			<p class="text-info">Nombre de producto: Gaseosa Cola  ---- Cantidad: 4 </p>
			<p class="text-info">Nombre de producto: Bola de lomo  ---- Cantidad: 3,5 <p>
			<P class="text-warning"> En el caso de carne y verdura, es 0.5=medio kg. 1=1kg</p>
         </div>
		 <form >
			<div class="row">
				<div class="col-xs-6">
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-cutlery"></span></span>
						<input type="text" class="form-control" placeholder="Ingrese Nombre de producto">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="input-group">
						<input type="int" class="form-control"  placeholder="Ingrese cantidad">
						
						
					</div>
				</div>
				
			</div>
		</form>
         <div class="modal-footer">
            <a href="#" class="btn btn-success" action="ValidarCantidad">Guardar</a>
            <a href="#" data-dismiss="modal" class="btn">Cancelar</a>
         </div>
   	</div>
   </div>
</div>
<!--{{Form::close()}}-->
	
@stop
