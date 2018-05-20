<?php
	require 'conexion.php';

	$Codigo_Cliente = $_POST["Codigo_Cliente"];
	$Primer_Nombre = $_POST["Primer_Nombre"];
	$Segundo_Nombre= $_POST["Segundo_Nombre"];
	$Primer_Apellido = $_POST["Primer_Apellido"];
	$Segundo_Apellido = $_POST["Segundo_Apellido"];
	$Direccion = $_POST["Direccion"];
	$Telefono = $_POST["Telefono"];
	$Codigo_Producto = $_POST["Codigo_Producto"];
	$Codigo_Empleado = $_POST["Codigo_Empleado"];

	$sql = "INSERT INTO cliente (Codigo_Cliente, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Direccion, Telefono, Codigo_Producto, Codigo_Empleado)
	VALUES ('$Codigo_Cliente', '$Primer_Nombre', '$Segundo_Nombre', '$Primer_Apellido', '$Segundo_Apellido', '$Direccion', '$Telefono', '$Codigo_Producto', '$Codigo_Empleado')";
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
					<h3>CLIENTE GUARDADO EXITOSAMENTE</h3>
					<?php } else { ?>
					<h3>ERROR AL GUARDAR</h3>
				<?php } ?>

				<a href="Clientes.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
