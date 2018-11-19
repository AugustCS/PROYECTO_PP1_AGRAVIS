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
						<input type="text" class="cajas-texto" placeholder="Escribe aqui" name="nom_courier">
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
						<input onkeypress="return soloNumeros(event)" type="text" class="cajas-texto" placeholder="Escribe aqui" name="costo_envio">
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