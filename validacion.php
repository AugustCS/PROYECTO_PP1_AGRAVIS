<?php 

   include("conexion.php");
	print "HolaMundo";
   $user=$_POST["username"];
   $clave=$_POST["password"];

    
  	print $user.$clave;
  $sql = "SELECT * FROM TBL_USUARIO WHERE USERNAME = :user AND PASS = :pass"; //Creamos la select

   $query = $conexion->prepare($sql); 
   $query-> bindParam(':user', $user);
   $query-> bindParam(':pass', $clave);
   
   $query-> execute(); 
   $contador = $query -> rowCount(); 
   /*if($contador==1){ 
   		header("Location:principal.php");
      }else{
      	header("Location:index.php");
      }*/


 ?>