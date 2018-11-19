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
			<h1>Elemento</h1>
			<form action="">
				<fieldset>
					<select name="" id="" class="cajas-texto">
						<option value="">TIPO AVE</option>
					</select>
				</fieldset><br>
				<fieldset>
					<label>Nombre</label><br>
					<input type="text" class="cajas-texto" placeholder="Escribe aqui" required>
				</fieldset><br>
				<fieldset>
					<label>Color</label><br>
					<input type="text" class="cajas-texto" placeholder="Escribe aqui" required>
				</fieldset><br>
				<fieldset>
					<label>Peso</label><br>
					<input type="text" class="cajas-texto" placeholder="Escribe aqui" required>
				</fieldset><br>
				<fieldset>
					<select name="" id="" class="cajas-texto">
						<option value="">LINEA GENETICA</option>
					</select>
				</fieldset><br>
				<fieldset>
					<label>Cantidad vacunas</label><br>
					<input onkeypress="return soloNumeros(event)" type="text" class="cajas-texto" placeholder="Escribe aqui" required>
				</fieldset><br>
				<fieldset>
					<label>Costo unidad</label><br>
					<input onkeypress="return soloNumeros(event)" type="text" class="cajas-texto" placeholder="Escribe aqui" required>
				</fieldset><br>
				<fieldset>
					<label>Costo caja</label><br>
					<input onkeypress="return soloNumeros(event)" type="text" class="cajas-texto" placeholder="Escribe aqui" required>
				</fieldset><br>
				<fieldset>
					<label>Imagen</label><br>
					<input type="file" class="cajas-texto" placeholder="Escribe aqui" required>
				</fieldset><br>	
				<fieldset>
					<input type="submit" value="Grabar">
					<input type="reset" value="Limpiar">
				</fieldset>
			</form>
		</div>
		<div class="box-cargados-right">
			
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>