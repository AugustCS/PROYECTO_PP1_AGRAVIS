<?php 
	require "../conexion.php";

	$opciones_linea_genetica = $conexion->prepare("SELECT * FROM bd_agravis.TBL_LINEA_GENETICA");
	$opciones_linea_genetica->execute();
	$datos_linea_genetica = $opciones_linea_genetica->fetchAll();
	foreach($datos_linea_genetica as $linea_genetica){
		print "<option value=".$linea_genetica[0].">".$linea_genetica[1]."</option>";
	}

 ?>