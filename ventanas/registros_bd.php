<?php 
	require '../conexion.php';

	$tag=$_POST["tag"];

	if(isset($tag) && $tag!==""){

		if($tag=='registrar_empleado'){
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
			print true;

		}else{
			print false;
		}

		if($tag=='registrar_linea_genetica'){
			$nombre_lin = $_POST["nom_lin_gene"];
			$des_lin = $_POST["des_lin_gene"];

			$inser_linea = $conexion ->prepare("INSERT INTO bd_agravis.TBL_LINEA_GENETICA(NOM_LINEA_GENETICA,DES_LINEA_GENETICA) VALUES(:NOM_LINEA,:DES_LINEA);");

			$inser_linea->bindParam(":NOM_LINEA",$nombre_lin);
			$inser_linea->bindParam(":DES_LINEA",$des_lin);

			$inser_linea->execute();
			print true;
			
		}else{
			print false;
		}

		if($tag=='registrar_tipo_ave'){
			$nombre_tipo = $_POST["nom_tipo_ave"];
			$des_tipo = $_POST["des_tipo_ave"];

			$inser_tipo = $conexion ->prepare("INSERT INTO bd_agravis.TBL_TIPO_AVE(NOM_TIPO_AVE,DES_TIPO_AVE) VALUES(:NOM_TIPO,:DES_TIPO);");

			$inser_tipo->bindParam(":NOM_TIPO",$nombre_tipo);
			$inser_tipo->bindParam(":DES_TIPO",$des_tipo);

			$inser_tipo->execute();
			print true;
			
		}else{
			print false;
		}

		if($tag=='registrar_courier'){
			$nombre_courier = $_POST["nom_courier"];
			$linea_envio = $_POST["linea_envio"];
			$costo_envio = $_POST["costo_envio"];
			$zona_envio = $_POST["zonaenvio"];

			$inser_courier = $conexion ->prepare("INSERT INTO bd_agravis.TBL_COURIER(NOM_COURIER,LINEA_ENVIO,COSTO_ENVIO,ZONAENVIO) VALUES(:NOM_COURIER,:LINEA_ENVIO,:COSTO_ENVIO,:ZONAENVIO);");
			$inser_courier->bindParam(":NOM_COURIER",$nombre_courier);
			$inser_courier->bindParam(":LINEA_ENVIO",$linea_envio);
			$inser_courier->bindParam(":COSTO_ENVIO",$costo_envio);
			$inser_courier->bindParam(":ZONAENVIO",$zona_envio);
			
			$inser_courier->execute();
			print true;
			
		}else{
			print false;
		}

		if($tag=='registrar_cliente'){
			$nom_cliente = $_POST["nom_cliente"];
			$dni_cliente = $_POST["dni_cliente"];
			$ruc_cliente = $_POST["ruc_cliente"];
			$mail_cliente = $_POST["email_cliente"];
			$dire_cliente = $_POST["dire_cliente"];
			$fono1_cliente = $_POST["fono1_cliente"];
			$fono2_cliente = $_POST["fono2_cliente"];

			$inser_cliente = $conexion ->prepare("INSERT INTO bd_agravis.TBL_CLIENTE(NOM_CLIENTE,DNI_CLIENTE,RUC_CLIENTE,EMAIL_CLIENTE,DIRECCION_CLIENTE,FONO_1,FONO_2) VALUES(:NOMBRE,:DNI,:RUC,:EMAIL,:DIRECCION,:FONO1,:FONO2);");

			$inser_cliente->bindParam(":NOMBRE",$nom_cliente);
			$inser_cliente->bindParam(":DNI",$dni_cliente);
			$inser_cliente->bindParam(":RUC",$ruc_cliente);
			$inser_cliente->bindParam(":EMAIL",$mail_cliente);
			$inser_cliente->bindParam(":DIRECCION",$dire_cliente);
			$inser_cliente->bindParam(":FONO1",$fono1_cliente);
			$inser_cliente->bindParam(":FONO2",$fono2_cliente);

			$inser_cliente->execute();
			print true;
			
		}else{
			print false;
		}

		if($tag == 'registrar_pedido'){
			$idempleado = $_POST["idempleado"];
			$idcliente = $_POST["idcliente"];
			$idcourier = $_POST["idcourier"];
			$fechadoc = $_POST["fechadoc"];
			$lugar = $_POST["lugar"];
			$fechaenvio = $_POST["fechaenvio"];
			$fechallegada = $_POST["fechallegada"];

			$inser_pedido = $conexion->prepare("INSERT INTO bd_agravis.TBL_PEDIDO(ID_EMPLEADO,ID_CLIENTE,ID_COURIER,FECHA_DOC,LUGAR_ENVIO,FECHA_DESP,FECHA_LLEG,MONTO_TOTAL) VALUES(:idempleado,:idcliente,:idcourier,:fechadoc,:lugar,:fechaenvio,:fechallegada,0);");
			$inser_pedido->bindParam(":idempleado",$idempleado);
			$inser_pedido->bindParam(":idcliente",$idcliente);
			$inser_pedido->bindParam(":idcourier",$idcourier);
			$inser_pedido->bindParam(":fechadoc",$fechadoc);
			$inser_pedido->bindParam(":lugar",$lugar);
			$inser_pedido->bindParam(":fechaenvio",$fechaenvio);
			$inser_pedido->bindParam(":fechallegada",$fechallegada);

			$inser_pedido->execute();

			$ultimoid = $conexion ->prepare("SELECT MAX(ID_PEDIDO) FROM bd_agravis.TBL_PEDIDO;");
			$ultimoid->execute();
			$datoultimo $ultimoid ->fetchAll();
			foreach($datoultimo as $id){
				var $valor = $id[0];
			}

			print $valor;

			print true;

		}else{
			print false;
		}

		

		/*LLAVE FINAL*/
	}

 ?>