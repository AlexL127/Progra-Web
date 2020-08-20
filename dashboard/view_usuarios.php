<?php require_once "vistas/parte_superior.php" ?>

<!-- INICIO DEL CONTENIDO PRINCIPAL -->
	<header>
		<h3 class="text-center text-ligth">Registro De Usuarios</h3>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<button id="btnNuevo" type="button" class="btn btn-success">NUEVO</button>
			</div>
		</div>
	</div>

	<!--MODAL PARA CRUD-->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table id="tablaPersonas" class="table table-stiped table-bordered table-condensed" style="width:100%">
						<thead class="text-center">
							<tr>
								<th>ID</th>
								<th>NOMBRE</th>
								<th>USUARIO</th>
							</tr>
						</thead>
                        <tbody>
                        	<tr>
                        		<td></td>
                        		<td></td>
                        		<td>
                        			<div class="text-center">
                        			<div class="btn-goup">
                        				<button class="btn btn-primary btnEditar">Editar</button>
                        				<button class="btn btn-danger btnBorrar">Borrar</button>
                        			</div>
                        			</div>
                        		</td>
                        	</tr>
                        </tbody>

					</table>
				</div>
			</div>
		</div>
	</div>

<div class="modal fade" id="modalCRUD" tableindex="-1" role="dialog" aria-labelledby="exampleModalLabel" ana-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"></h5>
				<button type="button" class="close" data-disniss="modal" aria-label="close">
					<span aria-hidden="true">&times;
					</span>
				</button>
			</div>
		<form id="formPersonas">
			<div class="modal-body">
				<div class="from-group">
					<label for="nombre" class="col-form-label">Nombre:</label>
					<input type="text" name="nombre" id="nombre">
				</div>
				<div class="from-group">
					<label for="Apellido" class="col-form-label">Usuario:</label>
					<input type="text" name="usuario" id="usuario">
				</div>
				<div class="from-group">
					<label for="Apellido" class="col-form-label">Contraseña:</label>
					<input type="password" name="password" id="password">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
				<button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
			</div>
		</form>
		</div>
	</div>
</div>

<!-- FIN DEL CONTENIDO PRINCIPAL -->

<?php require_once "vistas/parte_inferior.php" ?>