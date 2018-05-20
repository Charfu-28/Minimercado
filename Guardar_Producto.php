<?php
	require 'conexion.php';

	$Nombre = $_POST["Nombre"];
	$Marca = $_POST["Marca"];
	$Fecha_Elaboracion = $_POST["Fecha_Elaboracion"];
	$Fecha_Vencimiento = $_POST["Fecha_Vencimiento"];
	$Lugar_Origen = $_POST["Lugar_Origen"];	
	$Precio = $_POST["Precio"];
	$Cantidad = $_POST["Cantidad"];
	$Categoria = $_POST["Categoria"];
	$Codigo_Proveedor = $_POST["Codigo_Proveedor"];

	$sql = "INSERT INTO producto (Nombre, Marca, Fecha_Elaboracion, Fecha_Vencimiento, Lugar_Origen, Cantidad, Precio, Categoria, Codigo_Proveedor) VALUES ('$Nombre', '$Marca', '$Fecha_Elaboracion', '$Fecha_Vencimiento', '$Lugar_Origen', '$Cantidad', '$Precio', '$Categoria', '$Codigo_Proveedor')";
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
					<h3>PRODUCTO GUARDADO EXITOSAMENTE</h3>
					<?php } else { ?>
					<h3>ERROR AL GUARDAR</h3>
				<?php } ?>

				<a href="productos.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>