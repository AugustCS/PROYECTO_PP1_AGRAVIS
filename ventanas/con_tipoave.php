<?php 
	require '../conexion.php';
	$opciones_tipoave = $conexion->prepare("SELECT * FROM bd_agravis.TBL_TIPO_AVE");
	$opciones_tipoave->execute();
	$datos_opciones_tipoave = $opciones_tipoave->fetchAll();
	foreach($datos_opciones_tipoave as $tipoave){
?>
		<tr>
			<td><?php print $tipoave[0]; ?></td>
			<td><?php print $tipoave[1]; ?></td>
			<td><?php print $tipoave[2]; ?></td>
		</tr>
<?php
	}
 ?>