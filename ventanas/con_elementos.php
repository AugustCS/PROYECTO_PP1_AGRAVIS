<?php 
	require '../conexion.php';
	$opciones_elementos = $conexion->prepare("SELECT * FROM bd_agravis.ELEMENTOS");
	$opciones_elementos->execute();
	$datos_opciones_elementos = $opciones_elementos->fetchAll();
	foreach($datos_opciones_elementos as $elementos){
?>
		<div class="box-elementos">
			<div class="box-elementos-left">
				<span>ID ELEMENTO: <strong><?php print $elementos[0];?></strong></span>
				<span>TIPO AVE: <strong><?php print $elementos[1];?></strong></span>
				<span>NOMBRE ELEMENTO: <strong><?php print $elementos[2];?></strong></span>
				<span>COLOR ELEMENTO: <strong><?php print $elementos[3];?></strong></span>
				<span>PESO ELEMENTO: <strong><?php print $elementos[4].'Kg';?></strong></span>
				<span>LINEA GENETICA: <strong><?php print $elementos[5];?></strong></span>
				<span>VACUNAS: <strong><?php print $elementos[6];?></strong></span>
				<span>COSTO UND: S/. <strong><?php print $elementos[7];?></strong></span>
				<span>COSTO CAJA: S/. <strong><?php print $elementos[8];?></strong></span>
			</div>
			<div class="box-elementos-right">
				<img style="cursor:pointer;" src="<?php print 'subidas/'.$elementos[9];?>">
			</div>
			<div class="clear"></div>
		</div>

		<script>
			/*CODIGO PARA MOSTRAR EL MODAL*/
			$(".box-elementos-right img").click(function(){
				var ruta = $(this).attr("src");
				$("#img-modal").attr("src",ruta);
				$(".box-modal").fadeIn("swing");
			})	
		</script>
<?php
	}
 ?>