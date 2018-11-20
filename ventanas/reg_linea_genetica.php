<!DOCTYPE html>
<html>
<head>
	<script src="js/jquery.js"></script>
	<script src="js/logica.js"></script>
</head>
<body>
	<div class="box-cargados">
		<div class="box-cargados-left">
			<h1>Linea Genética</h1>
			<form id="form-reg-lin-gene" method="POST">
				<fieldset>
					<label>Nombre</label><br>
					<input class="cajas-texto" type="text" placeholder="Escribe aqui" name="nom_lin_gene" required>
				</fieldset><br>
				<fieldset>
					<label>Descripcion</label><br>
					<textarea class="cajas-texto texto-ajustado" placeholder="Escribe aqui" name="des_lin_gene" required></textarea>
				</fieldset><br>
				<input class="btn btn-primary" type="reset" value="Limpiar">
				<input class="btn btn-success" type="submit" value="Grabar">
			</form>
		</div>
		<div class="box-cargados-right">
			<table>
					<thead>
						<tr>
							<td colspan="4">LISTA DE LINEAS GENETICAS</td>
						</tr>
						<tr>
							<td>ID</td>
							<td>NOMBRE</td>
							<td>DESCRIPCION</td>
						</tr>
					</thead>
					<tbody id="tabla_lingenetica">
						<script>
							$("#tabla_lingenetica").load("ventanas/con_lingenetica.php");
						</script>
					</tbody>
			</table>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>