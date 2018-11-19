<?php 
	require "../conexion.php";

	$opciones_tipo_ave = $conexion->prepare("SELECT * FROM bd_agravis.TBL_TIPO_AVE");
	$opciones_tipo_ave->execute();
	$datos_tipo_ave = $opciones_tipo_ave->fetchAll();
	foreach($datos_tipo_ave as $tipo_ave){
		print "<option value=".$tipo_ave[0].">".$tipo_ave[1]."</option>";
	}

 ?>