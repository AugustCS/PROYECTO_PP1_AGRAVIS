<!DOCTYPE html>
<html>
<head>
	<script src="js/jquery.js"></script>
	<script src="js/logica.js"></script>
</head>
<body>
	<div class="box-cargados">
		<div class="box-cargados-left">
			<h1>Tipo Ave</h1>
			<form id="form-tipo-ave" method="POST">
				<fieldset>
					<label>Nombre</label><br>
					<input type="text" placeholder="Escribe aqui" class="cajas-texto" name="nom_tipo_ave" required>
				</fieldset><br>
				<fieldset>
					<label>Descripcion</label><br>
					<textarea class="cajas-texto texto-ajustado" placeholder="Escribe aqui" name="des_tipo_ave" required></textarea>
				</fieldset><br>	
				<fieldset>
					<input class="btn btn-primary" type="reset" value="Limpiar">
					<input class="btn btn-success" type="submit" value="Grabar">
				</fieldset>
			</form>
		</div>
		<div class="box-cargados-right">
			<table>
					<thead>
						<tr>
							<td colspan="3" class="barrita-roja">LISTA DE TIPOS DE AVE</td>
						</tr>
						<tr class="barrita-amarilla">
							<td>ID</td>
							<td>NOMBRE</td>
							<td>DESCRIPCION</td>
						</tr>
					</thead>
					<tbody id="tabla_tipo_ave">
						<script>
							$("#tabla_tipo_ave").load("ventanas/con_tipoave.php");
						</script>
					</tbody>
			</table>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>
