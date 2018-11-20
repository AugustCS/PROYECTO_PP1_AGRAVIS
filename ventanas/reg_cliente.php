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
				<h1>Cliente</h1>
				<form id="form-cliente" method="POST">
					<fieldset>
						<label>Nombre</label><br>
						<input type="text" class="cajas-texto" placeholder="Escribe aqui" name="nom_cliente" required>
					</fieldset><br>
					<fieldset>
						<label>DNI</label><br>
						<input onkeypress="return soloNumeros(event)" type="text" class="cajas-texto" placeholder="Escribe aqui" maxlength="8" minlength="8" name="dni_cliente" required>
					</fieldset><br>
					<fieldset>
						<label>RUC</label><br>
						<input onkeypress="return soloNumeros(event)" type="text" class="cajas-texto" placeholder="Escribe aqui" maxlength="11" minlength="11" name="ruc_cliente" required>
					</fieldset><br>
					<fieldset>
						<label>Email</label><br>
						<input type="email" class="cajas-texto" placeholder="Escribe aqui" name="email_cliente" required>
					</fieldset><br>
					<fieldset>
						<label>Direccion</label><br>
						<textarea class="cajas-texto texto-ajustado" placeholder="Escribe aqui" name="dire_cliente" required></textarea>
					</fieldset><br>
					<fieldset>
						<label>Telefono 1</label><br>
						<input onkeypress="return soloNumeros(event)" type="text" maxlength="9"class="cajas-texto" placeholder="Escribe aqui" name="fono1_cliente" required>
					</fieldset><br>
					<fieldset>
						<label>Telefono 2</label><br>
						<input onkeypress="return soloNumeros(event)" type="text" class="cajas-texto" maxlength="9" placeholder="Escribe aqui" name="fono2_cliente" required>
					</fieldset><br>
					<fieldset>
						<input class="btn btn-primary" type="reset" value="Limpiar">
						<input class="btn btn-success" type="submit" value="Grabar">
					</fieldset>
				</form>
			</div>
			<div class="box-cargados-right" style="padding:5px;">
				<table>
					<thead>
						<tr>
							<td colspan="8" class="barrita-roja">LISTADO DE CLIENTES</td>
						</tr>
						<tr class="barrita-amarilla">
							<td>ID</td>
							<td>NOMBRE</td>
							<td>DNI</td>
							<td>RUC</td>
							<td>EMAIL</td>
							<td>DIRECCION</td>
							<td>FONO 1</td>
							<td>FONO 2</td>
						</tr>
					</thead>
					<tbody id="tabla_clientes">
						<script>
							$("#tabla_clientes").load("ventanas/con_clientes.php");
						</script>
					</tbody>
				</table>
			</div>
			<div class="clear"></div>
		</div>
	</body>

</html>