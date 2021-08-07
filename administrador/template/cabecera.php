<?php 

	session_start();
	if (!isset($_SESSION['usuario'])) {
		header("Location:../index.php");
	}else{
		if ($_SESSION['usuario'] == "ok") {
			$nombreUsuario = $_SESSION['nombreUsuario'];
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administrador</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>

	<?php $url="http://".$_SERVER['HTTP_HOST']."/sitioweb"; ?>

	<nav class="navbar navbar-expand navbar-light bg-light">
	  <div class="nav navbar-nav" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link active" href="#">Administrador <span class="sr-only">(current)</span></a>
	      <a class="nav-item nav-link" href="<?php echo $url."/administrador/inicio.php" ?>">Inicio</a>
	      <a class="nav-item nav-link" href="<?php echo $url."/administrador/seccion/productos.php" ?>">Libros</a>
	      <a class="nav-item nav-link" href="<?php echo $url."/administrador/seccion/cerrar.php" ?>">Cerrar sesion</a>
	      <a class="nav-item nav-link" href="<?php echo $url; ?>">Ver sitio web</a>
	    </div>
	  </div>
	</nav>

	<div class="container">
		<br/><br/>
	  <div class="row">
	  	