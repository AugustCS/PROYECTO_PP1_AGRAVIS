$(document).ready(function(){


	function menulateral(menu,lista){
		$(menu).click(function(){
			$(lista).fadeIn("swing");
			setTimeout(function(){
				$(lista).fadeOut("swing");
			},5000)
		})
	}

	menulateral(".t-1",".lat-1");
	menulateral(".t-2",".lat-2");
	menulateral(".t-3",".lat-3");
	menulateral(".t-4",".lat-4");

	$("#linkusuario").hover(function(){
		$(".box-hide-user").fadeIn("swing");
		setTimeout(function(){
			$(".box-hide-user").fadeOut("swing");
		},1000)
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
	$("#form-reg-empleado").submit(function(e) {
        e.preventDefault();
        var data=$(this).serializeArray();
        data.push({name:'tag',value:'registrar_empleado'});
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
	        	},2000);
	        	$("#tabla_empleados").load("ventanas/con_empleados.php");
	        	$(".cajas-texto").val("");
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
	        	},2000);
	        	$("#tabla_lingenetica").load("ventanas/con_lingenetica.php");
	        	$(".cajas-texto").val("");
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
	        	},2000);
	        	$("#tabla_tipo_ave").load("ventanas/con_tipoave.php");
	        	$(".cajas-texto").val("");
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
	        	$(".cajas-texto").val("");

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
	        	},2000);
	        	$("#tabla_clientes").load("ventanas/con_clientes.php");
	        	$(".cajas-texto").val("");
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
	        	},2000);
	        	$(".cajas-texto").val("");
	       })
	       .fail(function(data){
	         	$(".box-rechazado").fadeIn("fast");
	        	setTimeout(function(){
	        		$(".box-rechazado").fadeOut("fast");
	        	},2000)
	       })       
  	})

})