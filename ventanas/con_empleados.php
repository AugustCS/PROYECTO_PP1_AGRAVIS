<?php 
	require '../conexion.php';
	$opciones_empleados = $conexion->prepare("SELECT ID_EMPLEADO,NOM_EMPLEADO,EMAIL_EMPLEADO,CARGO_EMPLEADO,USERNAME,ESTADO FROM bd_agravis.TBL_EMPLEADO");
	$opciones_empleados->execute();
	$datos_opciones_empleados = $opciones_empleados->fetchAll();
	foreach($datos_opciones_empleados as $empleados){
?>
		<tr>
			<td><?php print $empleados[0]; ?></td>
			<td><?php print $empleados[1]; ?></td>
			<td><?php print $empleados[2]; ?></td>
			<td><?php print $empleados[3]; ?></td>
			<td><?php print $empleados[4]; ?></td>
			<td><?php print $empleados[5]; ?></td>
		</tr>
<?php
	}
 ?>