<?php
	require 'conexion.php';

	$Codigo_Proveedor = $_GET['Codigo_Proveedor'];

	$sql = "SELECT * FROM proveedor WHERE Codigo_Proveedor = '$Codigo_Proveedor' ";
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>
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
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>

			<form class="form-horizontal" method="POST" action="Actualizar_Proveedor.php" autocomplete="off">

				<div class="form-group">
					<label for="Codigo_Proveedor" class="col-sm-2 control-label">Codigo Proveedor</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Codigo_Proveedor" name="Codigo_Proveedor" placeholder="Codigo Proveedor" value="<?php echo $row["Codigo_Proveedor"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Primer_Nombre" class="col-sm-2 control-label">Primer Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Primer_Nombre" name="Primer_Nombre" placeholder="Primer Nombre" value="<?php echo $row["Primer_Nombre"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Segundo_Nombre" class="col-sm-2 control-label">Segundo Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Segundo_Nombre" name="Segundo_Nombre" placeholder="Segundo Nombre" value="<?php echo $row["Segundo_Nombre"]; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="Primer_Apellido" class="col-sm-2 control-label">Primer Apellido</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Primer_Apellido" name="Primer_Apellido" placeholder="Primer Apellido" value="<?php echo $row["Primer_Apellido"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Segundo_Apellido" class="col-sm-2 control-label">Segundo Apellido</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Segundo_Apellido" name="Segundo_Apellido" placeholder="Segundo Apellido" value="<?php echo $row["Segundo_Apellido"]; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="Direccion" class="col-sm-2 control-label">Direccion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Direccion" value="<?php echo $row["Direccion"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Telefono" name="Telefono" placeholder="Telefono" value="<?php echo $row["Telefono"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Codigo_Producto" class="col-sm-2 control-label">Codigo Producto</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Codigo_Producto" name="Codigo_Producto" placeholder="Codigo Producto" value="<?php echo $row["Codigo_Producto"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="Proveedores.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>

			</form>
		</div>
	</body>
</html>
