

$('#btnNuevo').click(function(){
	
	$("#formPersonas").trigger("reset");
	$(".modal-header").css("background-color","blue");
	$(".modal-header").css("color","white");
	$(".modal-title").text("Nueva Persona");

	$("#modalCRUD").modal("show");
});


$("#formPersonas").submit(function(e){
	e.preventDefault();
	nombre = $.trim($("#nombre").val());
	usuario = $.trim($("#usuario").val());
	password = $.trim($("#password").val());

	$.ajax({
		url: "bd/crud.php",
		type: "POST",
		dataType: "json",
		data: {nombre:nombre, usuario:usuario, password:password},
		success:function(data){
			nombre = data[0].nombre;
			usuario = data[0].usuario;
			password = data[0].password;
		}

		//$("#modalCRUD").modal("hide");
	})
});