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




})