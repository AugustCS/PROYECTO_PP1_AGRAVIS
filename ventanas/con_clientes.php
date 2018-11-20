<?php 
	require '../conexion.php';
	$opciones_clientes = $conexion->prepare("SELECT * FROM bd_agravis.TBL_CLIENTE");
	$opciones_clientes->execute();
	$datos_opciones_clientes = $opciones_clientes->fetchAll();
	foreach($datos_opciones_clientes as $clientes){
?>
		<tr>
			<td><?php print $clientes[0]; ?></td>
			<td><?php print $clientes[1]; ?></td>
			<td><?php print $clientes[2]; ?></td>
			<td><?php print $clientes[3]; ?></td>
			<td><?php print $clientes[4]; ?></td>
			<td><?php print $clientes[5]; ?></td>
			<td><?php print $clientes[6]; ?></td>
			<td><?php print $clientes[7]; ?></td>
		</tr>
<?php
	}
 ?>