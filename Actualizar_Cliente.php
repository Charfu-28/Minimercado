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

	$sql = "UPDATE cliente SET Codigo_Cliente = '$Codigo_Cliente', Primer_Nombre='$Primer_Nombre', Segundo_Nombre='$Segundo_Nombre', Primer_Apellido='$Primer_Apellido', Segundo_Apellido='$Segundo_Apellido', Direccion='$Direccion', Telefono='$Telefono', Codigo_Producto='$Codigo_Producto', Codigo_Empleado='$Codigo_Empleado'  WHERE Codigo_Cliente='$Codigo_Cliente' ";
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
					<h3>REGISTRO MODIFICADO EXITOSAMENTE</h3>
					<?php } else { ?>
					<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>

				<a href="Clientes.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>