<?php

/*	1- si es un ingreso lo guardo en ticket.txt
 	2- si es salida leo el archivo:
 	leer del archivo todos los datos, guardarlos en un array
	si la patente existe en el archivo .
	 sobreescribo el archivo con todas las patentes
	 y su horario si la patente solicitada
	... calculo el costo de estacionamiento a 
	20$ el segundo y lo muestro.
	si la patente no existe mostrar mensaje y 
	el boton que me redirija al index  
	3- guardar todo lo facturado en facturado.txt*/

//var_dump($_POST["estacionar"]);
$accion = $_POST["estacionar"];
$patente = $_POST["patente"];
$ahora=date("y-m-d h:i:s");
if ($accion == "ingreso") 
{	
	echo "Se guardo la patente ".$patente;
	$archivo=fopen("ticket.txt", "a");
	fwrite($archivo, $patente."[".$ahora."\n");//el corchete es separador
	fclose($archivo);
}


?>
<br>
<br>
<a href="index.php">volver</a>