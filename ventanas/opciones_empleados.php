<?php 
	require '../conexion.php';
	$opciones_empleados = $conexion->prepare("SELECT ID_EMPLEADO,NOM_EMPLEADO FROM bd_agravis.TBL_EMPLEADO");
	$opciones_empleados->execute();
	$datos_opciones_empleados = $opciones_empleados->fetchAll();
	foreach($datos_opciones_empleados as $empleados){
?>
		<option value="<?php print $empleados[0]; ?>"><?php 	print $empleados[1]; ?></option>
<?php
	}
 ?>