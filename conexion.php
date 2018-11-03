<?php
	$host = 'localhost';
	$dbname= 'bd_agravis';
	$user= 'root';
	$pass= '';
	$conexion=null;

	try {
		$conexion = new PDO('mysql:host'.$host.";dbname=".$dbname,$user,$pass);
		
	} catch (PDOException $e) {
		echo 'ERROR: ' . $e -> getMessage();
	} finally{
		return $conexion;
	}

?>