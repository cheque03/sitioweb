<?php include("template/cabecera.php"); ?>
<?php include("administrador/config/bd.php"); 

$senteciaSQL = $conexion->prepare("SELECT * fROM libros");
$senteciaSQL->execute();
$listarLibros = $senteciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach ($listarLibros as $libro ) { ?>
<div class="col-md-3">
	<div class="card">
		<img class="card-img-top" src="<?php echo "img/".$libro['imagen']; ?>" alt="">
		<div class="card-body">
			<h4 class="card-title"><?php echo $libro['nombre']; ?></h4>
			<a name="" id="" href="#" class="btn btn-primary" role="button">Ver más</a>
  		</div>
	</div>
</div>

<?php } ?>
<?php include("template/pie.php"); ?>