<!DOCTYPE html>
<html>
<head>
	<script>
		function soloNumeros(e){
	       key = e.keyCode || e.which;
	       tecla = String.fromCharCode(key).toLowerCase();
	       numeros = "0123456789.";
	       especiales = "8-37-39-46";

	       tecla_especial = false
	       for(var i in especiales){
	            if(key == especiales[i]){
	                tecla_especial = true;
	                break;
	            }
	        }
	        if(numeros.indexOf(tecla)==-1 && !tecla_especial){
	            return false;
	        }
	    }
    </script>
    <script src="js/jquery.js"></script>
	<script src="js/logica.js"></script>
</head>
<body>
	<div class="box-cargados">
		<div class="box-cargados-left">
			<h1>Elemento</h1>
			<form id="form-reg-elemento" method="POST">
				<fieldset>
					<label>Tipo ave</label><br>
					<select name="tipo_ave" id="opciones_tipo_ave" class="cajas-texto">
						<script>
							$("#opciones_tipo_ave").load("ventanas/opciones_tipo_ave.php");
						</script>
					</select>
				</fieldset><br>
				<fieldset>
					<label>Nombre</label><br>
					<input type="text" class="cajas-texto" placeholder="Escribe aqui" name="nom_elemento" required>
				</fieldset><br>
				<fieldset>
					<label>Color</label><br>
					<input type="text" class="cajas-texto" placeholder="Escribe aqui" name="color_elemento" required>
				</fieldset><br>
				<fieldset>
					<label>Peso</label><br>
					<input onkeypress="return soloNumeros(event)" type="text" class="cajas-texto" placeholder="Escribe aqui" name="peso_elemento" required>
				</fieldset><br>
				<fieldset>
					<label>Linea genetica</label><br>
					<select name="linea_genetica" id="opciones_linea_genetica" class="cajas-texto">
						<script>
							$("#opciones_linea_genetica").load("ventanas/opciones_linea_genetica.php");
						</script>
					</select>
				</fieldset><br>
				<fieldset>
					<label>Cantidad vacunas</label><br>
					<input onkeypress="return soloNumeros(event)" type="text" class="cajas-texto" placeholder="Escribe aqui" name="cant_vacunas" required>
				</fieldset><br>
				<fieldset>
					<label>Costo unidad</label><br>
					<input onkeypress="return soloNumeros(event)" type="text" class="cajas-texto" placeholder="Escribe aqui" name="costo_unidad" required>
				</fieldset><br>
				<fieldset>
					<label>Costo caja</label><br>
					<input onkeypress="return soloNumeros(event)" type="text" class="cajas-texto" placeholder="Escribe aqui" name="costo_caja" required>
				</fieldset><br>
				<fieldset>
					<label>Imagen</label><br>
					<input type="file" class="cajas-texto" placeholder="Escribe aqui" name="img_elemento" required>
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