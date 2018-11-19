<?php 
			require "../conexion.php";
			
			$nombre_emp = $_POST["nom_empleado"];
			$mail_emp = $_POST["mail_empleado"];
			$dni_emp = $_POST["dni_empleado"];
			$cargo_emp = $_POST["cargo_empleado"];
			$user_emp = $_POST["user_empleado"];
			$pass_emp = $_POST["pass_empleado"];
			$estado_emp = $_POST["estado_empleado"];
			$nivel_emp = $_POST["nivel_empleado"];

			$inser_empleado = $conexion ->prepare("INSERT INTO bd_agravis.TBL_EMPLEADO(NOM_EMPLEADO,EMAIL_EMPLEADO,DNI_EMPLEADO,CARGO_EMPLEADO,USERNAME,PASS,ESTADO,NIVEL) VALUES(:NOMBRE,:EMAIL,:DNI,:CARGO,:USER,:PASS,:ESTADO,:NIVEL);");

			$inser_empleado->bindParam(":NOMBRE",$nombre_emp);
			$inser_empleado->bindParam(":EMAIL",$mail_emp);
			$inser_empleado->bindParam(":DNI",$dni_emp);
			$inser_empleado->bindParam(":CARGO",$cargo_emp);
			$inser_empleado->bindParam(":USER",$user_emp);
			$inser_empleado->bindParam(":PASS",$pass_emp);
			$inser_empleado->bindParam(":ESTADO",$estado_emp);
			$inser_empleado->bindParam(":NIVEL",$nivel_emp);

			$inser_empleado->execute();
			print "INSERCION ok";



 ?>