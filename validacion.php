<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		header('Location: principal.php');
	}

	if($_SERVER['REQUEST_METHOD']=='POST'){
		//cogemos datos de formulario
		$usuario = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		//validamos conexion a base de datos
		require('conexion.php');

		$consulta_usuario = $conexion -> prepare('SELECT USERNAME,PASS FROM TBL_USUARIO WHERE USERNAME=:usuario AND PASS=>:password');

		$consulta_usuario -> execute(array(':usuario'=>$usuario,':password'=>$password));

		$resultado = $consulta_usuario ->fetch();

		if($resultado!==false){
			$_SESSION['usuario']=$usuario;
			header('Location:principal.php');
		}else{
			header('Location:index.php');
		}
	}
 ?>