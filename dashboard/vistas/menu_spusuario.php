<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
	<div id="login">

		<div class="container">
			<div id="login-row" class="row justify-content-center align-items-center">
				<h4>Bienvenido <?php echo $_SESSION["s_usuario"]; ?> </h4>
			</div>
		</div>
	</div>

	<script src="../jquery/jquery-3.5.1.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/codigo.js"></script>
</body>
</html>