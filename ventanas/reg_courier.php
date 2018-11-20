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
				<h1>Courier</h1>
				<form id="form-courier" method="POST">
					<fieldset>
						<label>Nombre</label><br>
						<input type="text" class="cajas-texto" placeholder="Escribe aqui" name="nom_courier" required>
					</fieldset><br>
					<fieldset>
						<label>Linea envio</label><br>
						<select name="linea_envio" class="cajas-texto">
							<option value="Terrestre">Terrestre</option>
							<option value="Aerea">Aérea</option>
						</select>
					</fieldset><br>
					<fieldset>
						<label>Costo Envio</label>
						<input onkeypress="return soloNumeros(event)" type="text" class="cajas-texto" placeholder="Escribe aqui" name="costo_envio" required>
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
							<td colspan="4" class="barrita-roja">LISTA DE COURIERS</td>
						</tr>
						<tr class="barrita-amarilla">
							<td>ID</td>
							<td>NOMBRE</td>
							<td>LINEA ENVIO</td>
							<td>COSTO ENVIO</td>
						</tr>
					</thead>
					<tbody id="tabla_courier">
						<script>
							$("#tabla_courier").load("ventanas/con_courier.php");
						</script>
					</tbody>
				</table>
			</div>
			<div class="clear"></div>
		</div>
	</body>
</html>