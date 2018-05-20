<?php
	require 'conexion.php';

	$Codigo = $_GET['Codigo'];
	$sql = "SELECT * FROM usuarios WHERE Codigo = '$Codigo' ";
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

			<form class="form-horizontal" method="POST" action="Actualizar_Usuario.php" autocomplete="off">

				<div class="form-group">
					<label for="Codigo" class="col-sm-2 control-label">Codigo</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Codigo" name="Codigo" placeholder="Codigo Usuario" value="<?php echo $row["Codigo"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Nombres" class="col-sm-2 control-label">Nombres</label>
					<div class="col-sm-10">
						<input type="string" class="form-control" id="Nombres" name="Nombres" placeholder="Nombres" value="<?php echo $row["Nombres"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Apellidos" class="col-sm-2 control-label">Apellidos</label>
					<div class="col-sm-10">
						<input type="string" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos" value="<?php echo $row["Apellidos"]; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="Tipo_Usuario" class="col-sm-2 control-label">Tipo de Usuario</label>
					<div class="col-sm-10">
						<select class="form-control" id="Tipo_Usuario" name="Tipo_Usuario">
							<option value="ADMINISTRADOR" <?php if($row["Tipo_Usuario"]=='ADMINISTRADOR') echo 'selected'; ?>>ADMINISTRADOR</option>
							<option value="EMPLEADO" <?php if($row["Tipo_Usuario"]=='EMPLEADO') echo 'selected'; ?>>EMPLEADO</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="Nombre_Usuario" class="col-sm-2 control-label">Nombre de Usuario</label>
					<div class="col-sm-10">
						<input type="string" class="form-control" id="Nombre_Usuario" name="Nombre_Usuario" placeholder="Nombre de Usuario" value="<?php echo $row["Nombre_Usuario"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Contraseña" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Contraseña" name="Contrasenia" placeholder="Contraseña" value="<?php echo $row["Contrasenia"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="Usuarios.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>

			</form>
		</div>
	</body>
</html>
