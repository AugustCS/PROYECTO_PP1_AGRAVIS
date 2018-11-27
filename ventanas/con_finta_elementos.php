<?php 
	require '../conexion.php';
	$opciones_elementos = $conexion->prepare("SELECT * FROM bd_agravis.tbl_elemento");
	$opciones_elementos->execute();
	$datos_opciones_elementos = $opciones_elementos->fetchAll();
	foreach($datos_opciones_elementos as $elementos){
?>
		<tr>
			<td><?= $elementos[0]; ?></td>
			<td><?= $elementos[2]; ?></td>
			<td><?= $elementos[8]; ?></td>
			<td><input type="text" class="cajas-texto"></td>
			<td><button class="btn btn-primary">Agregar</button></td>
		</tr>
<?php
	}
 ?>