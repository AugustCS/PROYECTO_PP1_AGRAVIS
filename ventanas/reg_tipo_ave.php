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
					<input type="text" placeholder="Escribe aqui" class="cajas-texto" name="nom_tipo_ave">
				</fieldset><br>
				<fieldset>
					<label>Descripcion</label><br>
					<textarea class="cajas-texto texto-ajustado" placeholder="Escribe aqui" name="des_tipo_ave"></textarea>
				</fieldset><br>	
				<fieldset>
					<input class="btn btn-primary" type="reset" value="Limpiar">
					<input class="btn btn-success" type="submit" value="Grabar">
				</fieldset>
			</form>
		</div>
		<div class="box-cargados-right">
			
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>