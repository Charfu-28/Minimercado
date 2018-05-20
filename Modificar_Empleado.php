<?php
	require 'conexion.php';

	$Codigo_Empleado = $_GET['Codigo_Empleado'];

	$sql = "SELECT * FROM empleado WHERE Codigo_Empleado = '$Codigo_Empleado' ";
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

			<form class="form-horizontal" method="POST" action="Actualizar_Empleado.php" autocomplete="off">

				<div class="form-group">
					<label for="Codigo_Empleado" class="col-sm-2 control-label">Codigo Empleado</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Codigo_Empleado" name="Codigo_Empleado" placeholder="Codigo Empleado" value="<?php echo $row["Codigo_Empleado"]; ?>" required>
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
					<label for="Cedula_Empleado" class="col-sm-2 control-label">Cedula Empleado</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Cedula_Empleado" name="Cedula_Empleado" placeholder="Cedula Empleado" value="<?php echo $row["Cedula_Empleado"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="Empleados.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>

			</form>
		</div>
	</body>
</html>
