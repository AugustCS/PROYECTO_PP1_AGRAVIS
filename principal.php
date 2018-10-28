<?php 
	session_start();
	if(!isset($_SESSION['usuario'])){
		header('Location: index.php');
	}
 ?>
	
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>AGRAVIS E.I.R.L.</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Niramit" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="img/logo.png">
</head>
<body>
	<!-- <div class="bar-sup">
		<img src="img/logoa.png">
		<h1>AGRAVIS E.I.R.L.</h1>
	</div>  -->
	<div class="bar-lat">

		<img src="img/logoa.png" title="AGRAVIS E.I.R.L.">
		<h2> MENU <i class="fas fa-bars"></i></h2>

		<h3 class="t-1"><i class="fas fa-file-signature"></i> Registros </h3>
		<div class="menu-lat lat-1">
			<a href="">Sub Opcion 1</a>
			<a href="">Sub Opcion 1</a>
			<a href="">Sub Opcion 1</a>
			<a href="">Sub Opcion 1</a>
		</div>

		<h3 class="t-2"><i class="fas fa-chart-pie"></i> Consultas </h3>
		<div class="menu-lat lat-2">
			<a href="">Sub Opcion 2</a>
			<a href="">Sub Opcion 2</a>
			<a href="">Sub Opcion 2</a>
			<a href="">Sub Opcion 2</a>
		</div>

		<h3 class="t-3"><i class="fas fa-edit"></i> Modificaciones </h3>		
		<div class="menu-lat lat-3">
			<a href="">Sub Opcion 3</a>
			<a href="">Sub Opcion 3</a>
			<a href="">Sub Opcion 3</a>
			<a href="">Sub Opcion 3</a>
		</div>
		<h3 class="t-4"><i class="fas fa-book"></i> Reportes </h3>
		<div class="menu-lat lat-4">
			<a href="">Sub Opcion 3</a>
			<a href="">Sub Opcion 3</a>
			<a href="">Sub Opcion 3</a>
			<a href="">Sub Opcion 3</a>
		</div>
	</div>
	<div class="bar-content">
		<div class="box-data-user">
			<div class="box-user">
				<span id="linkusuario">Bienvenido ADMIN <i class="far fa-user-circle"></i> <i class="fas fa-angle-down"></i></span>
				<div class="box-hide-user">
					<span href="">Cerrar Sesion <i class="fas fa-times-circle"></i></span>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="box-contenido">
			
		</div>
	</div>
	<div class="clear"></div>

	<script src="js/jquery.js"></script>
	<script src="js/logica.js"></script>
</body>
</html>