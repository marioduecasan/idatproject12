<?php
	$destino="A19007333@idat.edu.pe";
	$apellidos=$_POST["apellidos"];
	$nombres=$_POST["nombres"];
	$direction=$_POST["direction"];
	$edad=$_POST["edad"];
	$contenido="Apellidos:".$apellidos."\nNombres:".$nombres."\nDireccion:".$direction."\nEdad:".$edad;

	mail($destino,"Contacto",$contenido);
	header("Location:gracias.html");
?>