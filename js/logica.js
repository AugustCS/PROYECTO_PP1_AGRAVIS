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

	lanzarContenido("#reg-empleados",".box-contenido","reg_empleados.php");
	lanzarContenido("#reg-linea-genetica",".box-contenido","reg_linea_genetica.php");
	lanzarContenido("#reg-tipo-ave",".box-contenido","reg_tipo_ave.php");
	lanzarContenido("#reg-elemento",".box-contenido","reg_elemento.php");
	lanzarContenido("#reg-cliente",".box-contenido","reg_cliente.php");
	lanzarContenido("#reg-courier",".box-contenido","reg_courier.php");

	/*INSERCIONES EN LA BD MEDIANTE AJAX*/
	$("#form-reg-personal").submit(function(e) {
        e.preventDefault();
        var data=$(this).serializeArray();
        data.push({name:'tag',value:'registrar_personal'});
	       $.ajax({
	         url: 'ventanas/registros_bd.php',
	         type: 'POST',
	         dataType: 'json',
	         data: data
	       })
	       .done(function() {
	        	$(".box-aceptado").fadeIn("fast");
	        	setTimeout(function(){
	        		$(".box-aceptado").fadeOut("fast");
	        	},2000)
	       })
	       .fail(function() {
	         	$(".box-rechazado").fadeIn("fast");
	        	setTimeout(function(){
	        		$(".box-rechazado").fadeOut("fast");
	        	},2000)
	       })       
  	})

  	$("#form-reg-lin-gene").submit(function(e) {
        e.preventDefault();
        var data=$(this).serializeArray();
        data.push({name:'tag',value:'registrar_linea_genetica'});
	       $.ajax({
	         url: 'ventanas/registros_bd.php',
	         type: 'POST',
	         dataType: 'json',
	         data: data
	       })
	       .done(function() {
	        	$(".box-aceptado").fadeIn("fast");
	        	setTimeout(function(){
	        		$(".box-aceptado").fadeOut("fast");
	        	},2000)
	       })
	       .fail(function() {
	         	$(".box-rechazado").fadeIn("fast");
	        	setTimeout(function(){
	        		$(".box-rechazado").fadeOut("fast");
	        	},2000)
	       })       
  	})

  	$("#form-tipo-ave").submit(function(e) {
        e.preventDefault();
        var data=$(this).serializeArray();
        data.push({name:'tag',value:'registrar_tipo_ave'});
	       $.ajax({
	         url: 'ventanas/registros_bd.php',
	         type: 'POST',
	         dataType: 'json',
	         data: data
	       })
	       .done(function() {
	        	$(".box-aceptado").fadeIn("fast");
	        	setTimeout(function(){
	        		$(".box-aceptado").fadeOut("fast");
	        	},2000)
	       })
	       .fail(function() {
	         	$(".box-rechazado").fadeIn("fast");
	        	setTimeout(function(){
	        		$(".box-rechazado").fadeOut("fast");
	        	},2000)
	       })       
  	})

  	$("#form-courier").submit(function(e) {
        e.preventDefault();
        var data=$(this).serializeArray();
        data.push({name:'tag',value:'registrar_courier'});
	       $.ajax({
	         url: 'ventanas/registros_bd.php',
	         type: 'POST',
	         dataType: 'json',
	         data: data
	       })
	       .done(function(){
	        	$(".box-aceptado").fadeIn("fast");
	        	setTimeout(function(){
	        		$(".box-aceptado").fadeOut("fast");
	        	},2000);
	        	$("#tabla_courier").load("ventanas/con_courier.php");

	       })
	       .fail(function(){
	         	$(".box-rechazado").fadeIn("fast");
	        	setTimeout(function(){
	        		$(".box-rechazado").fadeOut("fast");
	        	},2000)
	       })       
  	})

  	$("#form-cliente").submit(function(e) {
        e.preventDefault();
        var data=$(this).serializeArray();
        data.push({name:'tag',value:'registrar_cliente'});
	       $.ajax({
	         url: 'ventanas/registros_bd.php',
	         type: 'POST',
	         dataType: 'json',
	         data: data
	       })
	       .done(function(){
	        	$(".box-aceptado").fadeIn("fast");
	        	setTimeout(function(){
	        		$(".box-aceptado").fadeOut("fast");
	        	},2000)
	       })
	       .fail(function(){
	         	$(".box-rechazado").fadeIn("fast");
	        	setTimeout(function(){
	        		$(".box-rechazado").fadeOut("fast");
	        	},2000)
	       })       
  	})

  	$("#form-reg-elemento").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
	       $.ajax({
	         url: 'ventanas/registrar_elemento.php',
	         type: 'POST',
	         data: formData,
	         cache:false,
             contentType: false,
	         processData: false,
	       })
	       .done(function(data){
	        	$(".box-aceptado").fadeIn("fast");
	        	setTimeout(function(){
	        		$(".box-aceptado").fadeOut("fast");
	        	},2000)
	       })
	       .fail(function(data){
	         	$(".box-rechazado").fadeIn("fast");
	        	setTimeout(function(){
	        		$(".box-rechazado").fadeOut("fast");
	        	},2000)
	       })       
  	})

})