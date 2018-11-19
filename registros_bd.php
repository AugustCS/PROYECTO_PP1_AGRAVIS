<?php 
	require '../conexion.php';
	$tag=$_POST["tag"];

	if(isset($tag) && $tag!==""){
		if($tag=='registrar_personal'){
			$nombre_emp = $_POST["nom_empleado"];
			$mail_emp = $_POST["mail_empleado"];
			$dni_emp = $_POST["dni_empleado"];
			$cargo_emp = $_POST["cargo_empleado"];
			$user_emp = $_POST["user_empleado"];
			$pass_emp = $_POST["pass_empleado"];
			$estado_emp = $_POST["estado_empleado"];
			$nivel_emp = $_POST["nivel_empleado"];

			$inser_empleado = $conexion ->prepare("INSERT INTO bd_agravis.TBL_EMPLEADO(NOM_EMPLEADO,EMAIL_EMPLEADO,DNI_EMPLEADO,CARGO_EMPLEADO,USERNAME,PASS,ESTADO,NIVEL) VALUES(:NOMBRE,:EMAIL,:DNI,:CARGO,:USER,:PASS,:ESTADO,:NIVEL)");
			$inser_empleado->execute();
			print true;
		}else{
			print false;
		}
	}

 ?>