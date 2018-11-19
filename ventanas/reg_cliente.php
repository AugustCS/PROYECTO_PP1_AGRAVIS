<html>
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
	<body>
		<div class="box-cargados">
			<div class="box-cargados-left">
				<h1>Cliente</h1>
				<form action="">
					<fieldset>
						<label>Nombre</label><br>
						<input type="text" class="cajas-texto" placeholder="Escribe aqui">
					</fieldset><br>
					<fieldset>
						<label>DNI</label><br>
						<input onkeypress="return soloNumeros(event)" type="text" class="cajas-texto" placeholder="Escribe aqui" maxlength="8" minlength="8">
					</fieldset><br>
					<fieldset>
						<label>RUC</label><br>
						<input onkeypress="return soloNumeros(event)" type="text" class="cajas-texto" placeholder="Escribe aqui" maxlength="11" minlength="11">
					</fieldset><br>
					<fieldset>
						<label>Email</label><br>
						<input type="email" class="cajas-texto" placeholder="Escribe aqui">
					</fieldset><br>
					<fieldset>
						<label>Direccion</label><br>
						<textarea class="cajas-texto texto-ajustado" placeholder="Escribe aqui"></textarea>
					</fieldset><br>
					<fieldset>
						<label>Telefono 1</label><br>
						<input type="text" class="cajas-texto" placeholder="Escribe aqui">
					</fieldset><br>
					<fieldset>
						<label>Telefono 2</label><br>
						<input type="text" class="cajas-texto" placeholder="Escribe aqui">
					</fieldset><br>
					<fieldset>
						<input type="reset" value="Limpiar">
						<input type="submit" value="Grabar">
					</fieldset>
				</form>
			</div>
			<div class="box-cargados-right">
				
			</div>
			<div class="clear"></div>
		</div>
	</body>

</html>