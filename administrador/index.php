
<?php 
	session_start();
	if ($_POST) {
		if (($_POST['usuario'] == "develoteca") && ($_POST['contrasenia'] == "sistema")) {
			$_SESSION['usuario']="ok";
			$_SESSION['nombreUsuario']="Develoteca";
			header('Location:inicio.php');
		}else{
			$mensaje = "el usuario y contraseña son incorrectos";
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
	<div class="container">
	  <div class="row">
	  	<div class="col-md-4">
	  	</div>
	  	<div class="col-md-4">
	  		<br/><br/><br/>
	  		<div class="card">
	  		  <div class="card-header">
	  		    Login
	  		  </div>
	  		  <div class="card-body">
	  		  	<?php if (isset($mensaje)) { ?>
			  		  		<div class="alert alert-danger" role="alert">
			  		      		<?php echo $mensaje; ?>
			  		    	</div>
	  		  	<?php } ?>
	  		    
	  		    <form method="POST">
	  		      <div class="form-group">
	  		        <label >Usuario</label>
	  		        <input type="text" class="form-control" name="usuario" placeholder="Escribe tu Usuario">
	  		      </div>

	  		      <div class="form-group">
	  		        <label >Contraseña: </label>
	  		        <input type="password" class="form-control" name="contrasenia" placeholder="Escribe tu contaseña">
	  		      </div>
	  		      
	  		      <button type="submit" class="btn btn-primary">Entrar al administrador</button>
	  		    </form>
	  		  </div>
	  		  
	  		</div>
	  	</div>
	  </div>
	</div>
</body>
</html>