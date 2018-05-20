<?php
	require 'conexion.php';

	$Codigo = $_POST["Codigo"];
	$Nombres = $_POST["Nombres"];
	$Apellidos= $_POST["Apellidos"];
	$Tipo_Usuario= $_POST["Tipo_Usuario"];
	$Nombre_Usuario = $_POST["Nombre_Usuario"];	
	$Contrasenia = $_POST["Contrasenia"];

	$sql = "INSERT INTO usuarios (Codigo, Nombres, Apellidos, Tipo_Usuario, Nombre_Usuario, Contrasenia) VALUES
	('$Codigo', '$Nombres', '$Apellidos', '$Tipo_Usuario', '$Nombre_Usuario', '$Contrasenia')";
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

				<a href="Usuarios.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
