<?php 
	require '../conexion.php';
	$opciones_clientes = $conexion->prepare("SELECT ID_CLIENTE,NOM_CLIENTE FROM bd_agravis.TBL_CLIENTE");
	$opciones_clientes->execute();
	$datos_opciones_clientes = $opciones_clientes->fetchAll();
	foreach($datos_opciones_clientes as $clientes){
?>
		<option value="<?php print $clientes[0]; ?>"><?php 	print $clientes[1]; ?></option>
<?php
	}
 ?>