<?php
	require 'conexion.php';

	$Codigo_Cliente= $_GET["Codigo_Cliente"];

	$sql = "DELETE FROM cliente  WHERE Codigo_Cliente = '$Codigo_Cliente' ";
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
					<h3>REGISTRO ELIMINADO EXITOSAMENTE</h3>
					<?php } else { ?>
					<h3>ERROR AL ELIMINAR</h3>
				<?php } ?>

				<a href="Clientes.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>