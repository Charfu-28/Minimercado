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
				<h3 style="text-align:center">Nuevo Empleado</h3>
			</div>

			<form class="form-horizontal" method="POST" action="Guardar_Empleado.php" autocomplete="off">
				<div class="form-group">
					<label for="Codigo Empleado" class="col-sm-2 control-label">Codigo Empleado</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Codigo Empleado" name="Codigo_Empleado" placeholder="Codigo Empleado" required>
					</div>
				</div>

				<div class="form-group">
					<label for=" Primer Nombre" class="col-sm-2 control-label">Primer Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id=" Primer Nombre" name="Primer_Nombre" placeholder="Primer Nombre" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Segundo Nombre" class="col-sm-2 control-label">Segundo Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Segundo Nombre" name="Segundo_Nombre" placeholder="Segundo Nombre">
					</div>
				</div>

				<div class="form-group">
					<label for="Primer Apellido" class="col-sm-2 control-label">Primer Apellido</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Primer Apellido" name="Primer_Apellido" placeholder="Primer Apellido" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Segundo Apellido" class="col-sm-2 control-label">Segundo Apellido</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Segundo Apellido" name="Segundo_Apellido" placeholder="Segundo Apellido" >
					</div>
				</div>

				<div class="form-group">
					<label for="Cedula Empleado" class="col-sm-2 control-label">Cedula Empleado</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Cedula Empleado" name="Cedula_Empleado" placeholder="Cedula Empleado" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="Empleados.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>