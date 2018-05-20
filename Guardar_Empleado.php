<?php
	require 'conexion.php';

	$Codigo_Empleado = $_POST["Codigo_Empleado"];
	$Primer_Nombre = $_POST["Primer_Nombre"];
	$Segundo_Nombre= $_POST["Segundo_Nombre"];
	$Primer_Apellido = $_POST["Primer_Apellido"];
	$Segundo_Apellido = $_POST["Segundo_Apellido"];
	$Cedula_Empleado = $_POST["Cedula_Empleado"];

	$sql = "INSERT INTO empleado (Codigo_Empleado, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Cedula_Empleado) VALUES
	('$Codigo_Empleado', '$Primer_Nombre', '$Segundo_Nombre', '$Primer_Apellido', '$Segundo_Apellido', '$Cedula_Empleado')";
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
					<h3>REGISTRO DE EMPLEADO GUARDADO EXITOSAMENTE</h3>
					<?php } else { ?>
					<h3>ERROR AL GUARDAR</h3>
				<?php } ?>

				<a href="Empleados.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
