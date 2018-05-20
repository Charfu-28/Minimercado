<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">Nuevo Usuario</h3>
			</div>

			<form class="form-horizontal" method="POST" action="Guardar_Usuario.php" autocomplete="off">
				<div class="form-group">
					<label for="Codigo Usuario" class="col-sm-2 control-label">Codigo Usuario</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Codigo Usuario" name="Codigo" placeholder="Codigo Usuario" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Nombres" class="col-sm-2 control-label">Nombres</label>
					<div class="col-sm-10">
						<input type="string" class="form-control" id=" Nombres" name="Nombres" placeholder="Nombres" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Apellidos" class="col-sm-2 control-label">Apellidos</label>
					<div class="col-sm-10">
						<input type="string" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos">
					</div>
				</div>

				<div class="form-group">
					<label for="Tipo_Usuario" class="col-sm-2 control-label">Tipo de Usuario</label>
					<div class="col-sm-10">
						<select class="form-control" id="Tipo_Usuario" name="Tipo_Usuario">
							<option value="ADMINISTRADOR">ADMINISTRADOR</option>
							<option value="EMPLEADO">EMPLEADO</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="Nombre_usuario" class="col-sm-2 control-label">Nombre Usuario</label>
					<div class="col-sm-10">
						<input type="string" class="form-control" id="Nombre_usuario" name="Nombre_Usuario" placeholder="Nombre Usuario" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Contraseña" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Contraseña" name="Contrasenia" placeholder="Contraseña" >
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="Usuarios.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>