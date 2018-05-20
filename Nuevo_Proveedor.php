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
				<h3 style="text-align:center">Nuevo Proveedor</h3>
			</div>

			<form class="form-horizontal" method="POST" action="Guardar_Proveedor.php" autocomplete="off">
				<div class="form-group">
					<label for="Codigo Proveedor" class="col-sm-2 control-label">Codigo Proveedor</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Codigo Proveedor" name="Codigo_Proveedor" placeholder="Codigo Proveedor" required>
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
					<label for="Direccion" class="col-sm-2 control-label">Direccion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Direccion" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Telefono" name="Telefono" placeholder="Telefono" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Codigo Producto" class="col-sm-2 control-label">Codigo Producto</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Codigo Producto" name="Codigo_Producto" placeholder="Codigo Producto" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="Proveedores.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>