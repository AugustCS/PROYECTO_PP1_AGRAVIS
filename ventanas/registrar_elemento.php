<?php 
			require "../conexion.php";

			$tipo_ave = $_POST["tipo_ave"];
			$nom_elemento = $_POST["nom_elemento"];
			$color_elemento = $_POST["color_elemento"];
			$peso_elemento = $_POST["peso_elemento"];
			$linea_genetica = $_POST["linea_genetica"];
			$cant_vacunas = $_POST["cant_vacunas"];
			$costo_unidad = $_POST["costo_unidad"];
			$costo_caja = $_POST["costo_caja"];
			$nombre_imagen = $_FILES["img_elemento"]["name"];

			$inser_elemento = $conexion ->prepare("INSERT INTO bd_agravis.TBL_ELEMENTO(ID_TIPO_AVE,NOM_ELEMENTO,COLOR_ELEMENTO,PESO_ELEMENTO,ID_LINEA_GENETICA,CANT_VACUNAS,COSTO_UND,COSTO_CAJA,IMAGEN_AVE) VALUES(:TIPOAVE,:NOM_ELEMENTO,:COLOR_ELEMENTO,:PESO_ELEMENTO,:LINEA_GENETICA,:CANT_VACUNAS,:COSTO_UND,:COSTO_CAJA,:NOMBRE_IMAGEN);");

			$inser_elemento->bindParam(":TIPOAVE",$tipo_ave);
			$inser_elemento->bindParam(":NOM_ELEMENTO",$nom_elemento);
			$inser_elemento->bindParam(":COLOR_ELEMENTO",$color_elemento);
			$inser_elemento->bindParam(":PESO_ELEMENTO",$peso_elemento );
			$inser_elemento->bindParam(":LINEA_GENETICA",$linea_genetica);
			$inser_elemento->bindParam(":CANT_VACUNAS",$cant_vacunas);
			$inser_elemento->bindParam(":COSTO_UND",$costo_unidad);
			$inser_elemento->bindParam(":COSTO_CAJA",$costo_caja);
			$inser_elemento->bindParam(":NOMBRE_IMAGEN",$nombre_imagen);

			$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/AGRAVIS/PROYECTO_PP1_AGRAVIS/subidas/';
			
			move_uploaded_file($_FILES['img_elemento']['tmp_name'], $carpeta_destino.$nombre_imagen);

			$inser_elemento->execute();

			print true;
	

 ?>