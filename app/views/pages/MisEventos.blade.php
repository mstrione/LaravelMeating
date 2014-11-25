@extends('layouts.default')

@section('content')


      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>
    <!--le da el cuerpo al body (valga la redundancia)--> <!--modificado en el css box-shadow-->
<?php/*
	@$Nombre=$_REQUEST['Nombre'];
	@$Email=$_REQUEST['Email'];
	@$FechaNacimiento="1990-05-21";
	@$Sexo="Masculino";
	@$Provincia=$_REQUEST['Provincia'];
	@$Ciudad=$_REQUEST['Ciudad'];
	@$Password="12345";
	
?>
    <div class="container"> 
    	<div class="well"> 
	        <div><h1 id="type"> Mis Eventos</h1></div>
            <div align="right"><a href="Evento.php" class="btn btn-primary" >Agregar Evento +</a></div><br>		

<?php	
		/*$conexion= mysql_connect("localhost","root","") or die ("no se puede conectar con la base de datos");
	
		//Selecciono la base de datos
		mysql_select_db("meating") or die("no se puede conectar con usuarios");
		
		if ($Nombre!="" and $Email!="" and $FechaNacimiento!="" and $Sexo!="" and $Provincia!="" and $Ciudad!="" and $Password!="")
	{
		//enviar consulta
		$instruccion = "insert into usuarios(Nombre, Email,FechaNacimiento, Sexo, Provincia, Ciudad, Password ) values ('$Nombre','$Email','$FechaNacimiento','$Sexo','$Provincia','$Ciudad','$Password')";
		$consulta = mysql_query ($instruccion, $conexion) or die("falló consulta");
	}
	
	//pidiendo datos para mis eventos
	$instruccion= "select * from evento";
	$consulta = mysql_query ($instruccion, $conexion) or die("falló consulta");
	
	
	$nfilas = mysql_num_rows($consulta);
      if ($nfilas > 0)
      {
         print ("<table class='table table-striped table-hover'>\n");
         print ("<thead>\n");
		 print ("<TR>\n");
         print ("<TH>Nombre</TH>\n");
         print ("<TH>Lugar</TH>\n");
         print ("<TH>Fecha</TH>\n");
         print ("<TH>Organizador</TH>\n");
         print ("<TH>invitados/Confirmados</TH>\n");
         print ("</TR>\n");
		 print ("</thead>\n");
		 print ("<tbody>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
			if (($i%2)==0)
			{
				$resultado = mysql_fetch_array ($consulta);
				print ("<TR class='info'>\n");
				print ("<TD>" . $resultado['NombreEvento'] . "</TD>\n");
				print ("<TD>" . $resultado['Lugar'] . "</TD>\n");
				print ("<TD>" . $resultado['FechaYHora'] . "</TD>\n");
				print ("<TD>" . $resultado['Organizador'] . "</TD>\n");
				print ("<TD>12/12</TD>\n"); //invitados confirmados falta la cuenta 
				print ("</TR>\n");
			}
			else
			{
				$resultado = mysql_fetch_array ($consulta);
				print ("<TR class='active'>\n");
				print ("<TD>" . $resultado['NombreEvento'] . "</TD>\n");
				print ("<TD>" . $resultado['Lugar'] . "</TD>\n");
				print ("<TD>" . $resultado['FechaYHora'] . "</TD>\n");
				print ("<TD>" . $resultado['Organizador'] . "</TD>\n");
				print ("<TD>12/12</TD>\n"); //invitados confirmados falta la cuenta 
				print ("</TR>\n");
			}
         }
		 print ("<tbody>\n");
         print ("</TABLE>\n");
      }
      else
         print ("No hay eventos disponibles");
		 
		 
	// Cerrar conexión
   	mysql_close ($conexion);
 */
?>    
        </div>
	</div>