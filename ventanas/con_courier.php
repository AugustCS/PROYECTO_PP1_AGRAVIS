<?php 
	require '../conexion.php';
	$opciones_courier = $conexion->prepare("SELECT * FROM bd_agravis.TBL_COURIER");
	$opciones_courier->execute();
	$datos_opciones_courier = $opciones_courier->fetchAll();
	foreach($datos_opciones_courier as $courier){
?>
		<tr>
			<td><?php print $courier[0]; ?></td>
			<td><?php print $courier[1]; ?></td>
			<td><?php print $courier[2]; ?></td>
			<td><?php print $courier[3]; ?></td>
		</tr>
<?php
	}
 ?>