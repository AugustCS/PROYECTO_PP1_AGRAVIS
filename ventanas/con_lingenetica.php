<?php 
	require '../conexion.php';
	$opciones_lingenetica = $conexion->prepare("SELECT * FROM bd_agravis.TBL_LINEA_GENETICA");
	$opciones_lingenetica->execute();
	$datos_opciones_lingenetica = $opciones_lingenetica->fetchAll();
	foreach($datos_opciones_lingenetica as $lingenetica){
?>
		<tr>
			<td><?php print $lingenetica[0]; ?></td>
			<td><?php print $lingenetica[1]; ?></td>
			<td><?php print $lingenetica[2]; ?></td>
		</tr>
<?php
	}
 ?>