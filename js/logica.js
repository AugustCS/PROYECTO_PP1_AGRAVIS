$(document).ready(function(){

	$(".menu-lat li").click(function(){
		$(".menu-sub-lat").toggle("fast");
	})

	function menulateral(menu,lista){
		$(menu).click(function(){
			$(lista).toggle("fast");
		})
	}

	menulateral(".t-1",".lat-1");
	menulateral(".t-2",".lat-2");
	menulateral(".t-3",".lat-3");
	menulateral(".t-4",".lat-4");

	$("#linkusuario").click(function(){
		$(".box-hide-user").toggle("fast");
	})

	$(".menu-lat a").click(function(e){
		e.preventDefault();
	})

	function lanzarContenido(link,contenido,archivo){
		$(link).click(function(){
			$(".menu-lat a").removeClass("active");
			$(link).addClass("active");
			$(contenido).load("ventanas/"+archivo);
		})
	}

	lanzarContenido("#reg-usuarios",".box-contenido","reg_usuarios.php");
	lanzarContenido("#reg-empleados",".box-contenido","reg_empleados.php");
	lanzarContenido("#reg-linea-genetica",".box-contenido","reg_linea_genetica.php");
	lanzarContenido("#reg-tipo-ave",".box-contenido","reg_tipo_ave.php");
	lanzarContenido("#reg-elemento",".box-contenido","reg_elemento.php");

})