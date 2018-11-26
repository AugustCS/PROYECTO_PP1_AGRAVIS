<?php 
			require "../conexion.php";
			
			$idempleado = $_POST["idempleado"];
			$idcliente = $_POST["idcliente"];
			$idcourier = $_POST["idcourier"];
			$fechadoc = $_POST["fechita"];
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
			$datoultimo = $ultimoid->fetchAll();
			foreach($datoultimo as $id){
				$valor = $id[0];
			}

			print $valor.'<br>';
			print 'valor insertado correctamente';



 ?>