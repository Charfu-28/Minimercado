<?php
	require 'conexion.php';

	$Codigo_Proveedor = $_POST["Codigo_Proveedor"];
	$Primer_Nombre = $_POST["Primer_Nombre"];
	$Segundo_Nombre= $_POST["Segundo_Nombre"];
	$Primer_Apellido = $_POST["Primer_Apellido"];
	$Segundo_Apellido = $_POST["Segundo_Apellido"];
	$Direccion = $_POST["Direccion"];
	$Telefono = $_POST["Telefono"];
	$Codigo_Producto = $_POST["Codigo_Producto"];

	$sql = "INSERT INTO proveedor (Codigo_Proveedor, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Direccion, Telefono, Codigo_Producto) VALUES
	('$Codigo_Proveedor', '$Primer_Nombre', '$Segundo_Nombre', '$Primer_Apellido', '$Segundo_Apellido', '$Direccion', '$Telefono', '$Codigo_Producto')";
	$resultado = $conexion ->query($sql);
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
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
					<h3>PROVEEDOR GUARDADO EXITOSAMENTE</h3>
					<?php } else { ?>
					<h3>ERROR AL GUARDAR</h3>
				<?php } ?>

				<a href="Proveedores.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
