<?php 
	$host = "localhost";
	$bd = "sitio";
	$usuario = "root";
	$contrasenia = "";

	try {
		$conexion = new PDO("mysql:host=$host; dbname=$bd", $usuario, $contrasenia);
		if ($conexion) {
			echo "<script>console.log('conectado al sistema')</script>";
		}
		
	} catch (Exception $ex) {
		echo $ex->getMessage();	
	}
 ?>