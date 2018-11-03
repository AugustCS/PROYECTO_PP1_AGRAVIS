<?php 
	
   try {
   		include('conexion.php');

   		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

   		$sql = "SELECT * FROM bd_agravis.TBL_EMPLEADO WHERE USERNAME= :user AND PASS = :password";

   		$resultado = $conexion->prepare($sql);

   		$user = htmlentities(addslashes($_POST["username"]));

   	$password = htmlentities(addslashes($_POST["password"]));

   		$resultado->bindValue(":user",$user);
   		$resultado->bindValue(":password",$password);

   		$resultado->execute();

   		$registro = $resultado->rowCount();

   		if($registro==1){
   			session_start();
   			$_SESSION["usuario"]=$_POST["username"];
   			header("location:principal.php");
   		}else{
   			header("location:index.php");
   		}

   } catch (Exception $e) {
   		die("Error:".$e-> getMessage());
   }

 ?>