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
			<h1>Empleados</h1>
			<form id="form-reg-personal" method="POST">
				<fieldset>
					<label>Nombre</label><br>
					<input class="cajas-texto" type="text" placeholder="Escribe aqui" name="nom_empleado" required>
				</fieldset><br>
				<fieldset>
					<label>Email</label><br>
					<input class="cajas-texto" type="email" placeholder="Escribe aqui" name="mail_empleado" required>
				</fieldset><br>
				<fieldset>
					<label>DNI</label><br>
					<input onkeypress="return soloNumeros(event)" class="cajas-texto" type="text" placeholder="Escribe aqui" name="dni_empleado" maxlength="8" required>
				</fieldset><br>
				<fieldset>
					<label>Cargo</label><br>
					<input class="cajas-texto" type="text" placeholder="Escribe aqui" name="cargo_empleado" required>
				</fieldset><br>
				<fieldset>
					<label>Usuario</label><br>
					<input class="cajas-texto" type="text" placeholder="Escribe aqui" name="user_empleado" required>
				</fieldset><br>
				<fieldset>
					<label>Contraseña</label><br>
					<input class="cajas-texto" type="password" placeholder="Escribe aqui" name="pass_empleado" required>
				</fieldset><br>
				<fieldset>
					<label>Estado</label><br>
					<select name="estado_empleado" class="cajas-texto">
						<option value="1">Habilitado</option>
						<option value="0">Deshabilitado</option>
					</select>
				</fieldset><br>
				<fieldset>
					<label>Nivel empleado</label><br>
					<select name="nivel_empleado" class="cajas-texto">
						<option value="1">Administrador</option>
						<option value="2">Jefe</option>
						<option value="3">Empleado</option>
					</select>
				</fieldset><br>
				<input class="btn btn-primary" type="reset" value="Limpiar">
				<input class="btn btn-success" type="submit" value="Grabar">
			</form>
		</div>
		<div class="box-cargados-right">
			
		</div>
		<div class="clear"></div>
	</div>

</body>
</html>