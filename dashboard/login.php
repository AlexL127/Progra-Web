<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div id="login">

		<div class="container">
			<div id="login-row" class="row justify-content-center align-items-center">
				<div id="login-col" class="col-md-4">
					<div id="login-box" class="col-md-12 text-dark">
						<form id="formlogin" class="form" action="" method="post">
							<h3 class="text-center text-dark"> Iniciar Sesión</h3>
							<br>
							<div class="form-group">
								<h5>Usuario</h5>
								<input type="text" name="usuario" id="usuario" class="form-control">
								<br>
								<h5>Contraseña</h5>
								<input type="password" name="password" id="password" class="form-control">
								<label id="mserror"></label>
							</div>
							<div class="row justify-content-center align-items-center">
								<input type="submit" name="submit" class="btn btn-primary btn-lg btn-lg" value="Iniciar">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="jquery/jquery-3.5.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/codigo.js"></script>
</body>
</html>