<?php 
	require '../conexion.php';
	$opciones_courier = $conexion->prepare("SELECT ID_COURIER,NOM_COURIER FROM bd_agravis.TBL_COURIER");
	$opciones_courier->execute();
	$datos_opciones_courier = $opciones_courier->fetchAll();
	foreach($datos_opciones_courier as $courier){
?>
		<option value="<?php print $courier[0]; ?>"><?php 	print $courier[1]; ?></option>
<?php
	}
 ?>