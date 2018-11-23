<?php 
	session_start();
	if(!isset($_SESSION["usuario"])){
		header("location:index.php");
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
	<div class="box-modal">
		<div class="box-in-modal">
			<button id="cerrar-modal" class="btn btn-fail">Cerrar</button>
			<img id="img-modal" src="">
		</div>
	</div>
	<div class="box-aceptado">
		<p>REGISTRO INGRESADO CORRECTAMENTE</p>
	</div>
	<div class="box-rechazado">
		<p>ERROR EN EL REGISTRO SOLICITADO</p>
	</div>
	<div class="bar-lat">

		<img src="img/logoa.png" title="AGRAVIS E.I.R.L.">
		<h2> MENU <i class="fas fa-bars"></i></h2>

		<h3 class="t-1"><i class="fas fa-file-signature"></i> Registro </h3>
		<div class="menu-lat lat-1">
			<a id="reg-empleados">Registro Empleados</a>
			<a id="reg-linea-genetica">Registro Linea Genética</a>
			<a id="reg-tipo-ave">Registro Tipo Ave</a>
			<a id="reg-elemento">Registro Elemento</a>
			<a id="reg-cliente">Registro Cliente</a>
			<a id="reg-courier">Registro Courier</a>
		</div>

		<h3 class="t-2"><i class="fas fa-chart-pie"></i> Pedido</h3>
		<div class="menu-lat lat-2">
			<a id="reg-pedido">Generar Pedido</a>
			<a id="con-pedido">Consultar Pedido</a>
			
		</div>

		<h3 class="t-3"><i class="fas fa-edit"></i> Modificaciones </h3>		
		<div class="menu-lat lat-3">
			<a href="">Sub Opcion 3</a>
			<a href="">Sub Opcion 3</a>
			<a href="">Sub Opcion 3</a>
			<a href="">Sub Opcion 3</a>
		</div>
		<div class="box-cargando">
			<span><i class="fas fa-spinner fa-spin"></i></span>
		</div>
	</div>
	<div class="bar-content">
		<div class="box-data-user">
			<div class="box-user">
				<span id="linkusuario">Bienvenido <?php print $_SESSION["usuario"];?> <i class="far fa-user-circle"></i> <i class="fas fa-angle-down"></i></span>
				<div class="box-hide-user">
					<a id="linkcerrar" href="cerrar_sesion.php" style="color:white;">Cerrar Sesion <i class="fas fa-times-circle"></i></a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="box-contenido">
			<div class="box-cargados b-wel">
				<div class="box-welcome">
					<div class="box-in-wel">
						<h1>BIENVENIDO A AGRAVIS</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia expedita, ipsum tenetur maxime, dolor praesentium unde quasi dolorum illo voluptas perferendis optio asperiores exercitationem enim similique ab hic voluptates.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>

	<script src="js/jquery.js"></script>
	<script src="js/logica.js"></script>
</body>
</html>