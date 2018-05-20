<html lang="es">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">Nuevo Producto</h3>
			</div>

			<form class="form-horizontal" method="POST" action="Guardar_Producto.php" autocomplete="off">
				<!-- <div class="form-group">
					<label for="Codigo" class="col-sm-2 control-label">Codigo</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Codigo" name="Codigo" placeholder="Codigo" required>
					</div>
				</div> -->

				<div class="form-group">
					<label for="Nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Marca" class="col-sm-2 control-label">Marca</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Marca" name="Marca" placeholder="Marca">
					</div>
				</div>

				<div class="form-group">
					<label for="Fecha_Elaboracion" class="col-sm-2 control-label">Fecha Elaboracion</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="Fecha_Elaboracion" name="Fecha_Elaboracion" placeholder="Fecha Elaboracion" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Fecha_Vencimiento" class="col-sm-2 control-label">Fecha Vencimiento</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="Fecha_Vencimiento" name="Fecha_Vencimiento" placeholder="Fecha Vencimiento" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Lugar_Origen" class="col-sm-2 control-label">Lugar Origen</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Lugar_Origen" name="Lugar_Origen" placeholder="Lugar Origen" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Precio" class="col-sm-2 control-label">Precio</label>
					<div class="col-sm-10">
						<input type="float" class="form-control" id="Precio" name="Precio" placeholder="Precio" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Cantidad" class="col-sm-2 control-label">Cantidad</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Cantidad" name="Cantidad" placeholder="Cantidad" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Categoria" class="col-sm-2 control-label">Categoria</label>
					<div class="col-sm-10">
						<select class="form-control" id="Categoria" name="Categoria">
							<option value="OTRO">OTRO</option>
							<option value="ABARROTES">ABARROTES</option>
							<option value="FRUTAS Y VERDURAS">FRUTAS Y VERDURAS</option>
							<option value="CARNES">CARNES</option>
							<option value="LACTEOS">LACTEOS</option>
							<option value="DE LIMPIEZA">DE LIMPIEZA</option>
							<option value="LICORES">LICORES</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="Codigo_Proveedor" class="col-sm-2 control-label">Codigo Proveedor</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Codigo_Proveedor" name="Codigo_Proveedor" placeholder="Codigo Proveedor" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="productos.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>