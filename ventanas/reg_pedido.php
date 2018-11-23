<!DOCTYPE html>
<html >
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
		<div class="box-cargados-top">
			<form>
				<fieldset class="cajas-form">
					<label>Empleado: </label><br>
					<select name="idempleado" class="cajas-texto" id="da-empleado">
						<script>
							$("#da-empleado").load("ventanas/opciones_empleados.php");
						</script>
					</select>
				</fieldset>
				<fieldset class="cajas-form">
					<label>Cliente: </label><br>
					<select name="idcliente" class="cajas-texto" id="da-cliente">
						<script>
							$("#da-cliente").load("ventanas/opciones_cliente.php");
						</script>
					</select>
				</fieldset>
				<fieldset class="cajas-form">
					<label>Courier: </label><br>
					<select name="idcourier" class="cajas-texto" id="da-courier">
						<script>
							$("#da-courier").load("ventanas/opciones_courier.php");
						</script>
					</select>
				</fieldset>
				<fieldset class="cajas-form">
					<label>Fecha Documento</label>
					<input type="text" class="cajas-texto">
				</fieldset>
				<fieldset class="cajas-form">
					<label>Lugar Envio</label>
					<input type="text" class="cajas-texto">
				</fieldset>
				<fieldset class="cajas-form">
					<label>Fecha Despacho</label>
					<input type="text" class="cajas-texto">
				</fieldset>
				<fieldset class="cajas-form">
					<label>Fecha Llegada</label>
					<input type="text" class="cajas-texto">
				</fieldset>
				<fieldset class="cajas-form">
					<label>Monto Total</label>
					<input onkeypress="return soloNumeros(event);" type="text" class="cajas-texto">
				</fieldset>
				<fieldset style="padding-top: 10px;" class="cajas-form">
					<input type="reset" class="btn btn-primary" value="Limpiar">
					<input type="submit" class="btn btn-success" value="Generar">
				</fieldset>
			</form>
		</div>
	</div>
</body>
</html>