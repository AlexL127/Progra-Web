$('#formlogin').submit(function(e){
	e.preventDefault();
	var usuario = $.trim($("#usuario").val());
	var password = $.trim($("#password").val());
	if(usuario.length == "" || password.length == ""){
		document.getElementById("mserror").innerHTML="LLenar los campos";
	}else{
		$.ajax({
			url:"bd/login.php",
			type: "POST",
			datatype: "json",
			data: {usuario:usuario, password:password},
			success:function(data){
				if (data == "null"){
					document.getElementById("mserror").innerHTML="Usuario o contraseña erroneos";
				}else{
					window.location.href = "index.php";
				}
			}
		});
	}
});