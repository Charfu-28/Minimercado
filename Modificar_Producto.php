<?php
	require 'conexion.php';

	$Codigo = $_GET['Codigo'];

	$sql = "SELECT * FROM producto WHERE Codigo = '$Codigo' ";
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

			<form class="form-horizontal" method="POST" action="Actualizar_Producto.php" autocomplete="off">
				<div class="form-group">
					<label for="Nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" value="<?php echo $row["Nombre"]; ?>" required>
					</div>
				</div>

				<input type="hidden" id="Codigo" name="Codigo" value="<?php echo $row["Codigo"]; ?>" />

				<div class="form-group">
					<label for="Marca" class="col-sm-2 control-label">Marca</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Marca" name="Marca" placeholder="Marca" value="<?php echo $row["Marca"]; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="Fecha_Elaboracion" class="col-sm-2 control-label">Fecha Elaboracion</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="Fecha_Elaboracion" name="Fecha_Elaboracion" placeholder="Fecha Elaboracion" value="<?php echo $row["Fecha_Elaboracion"]; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="Fecha_Vencimiento" class="col-sm-2 control-label">Fecha Vencimiento</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="Fecha_Vencimiento" name="Fecha_Vencimiento" placeholder="Fecha Vencimiento" value="<?php echo $row["Fecha_Vencimiento"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Lugar_Origen" class="col-sm-2 control-label">Lugar Origen</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Lugar_Origen" name="Lugar_Origen" placeholder="Lugar Origen" value="<?php echo $row["Lugar_Origen"]; ?>" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="Precio" class="col-sm-2 control-label">Precio</label>
					<div class="col-sm-10">
						<input type="float" class="form-control" id="Precio" name="Precio" placeholder="Precio" value="<?php echo $row["Precio"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Cantidad" class="col-sm-2 control-label">Cantidad</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Cantidad" name="Cantidad" placeholder="Cantidad" value="<?php echo $row["Cantidad"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Categoria" class="col-sm-2 control-label">Categoria</label>
					<div class="col-sm-10">
						<select class="form-control" id="Categoria" name="Categoria">
							<option value="OTRO" <?php if($row["Categoria"]=='OTRO') echo 'selected'; ?>>OTRO</option>
							<option value="ABARROTES" <?php if($row["Categoria"]=='ABARROTES') echo 'selected'; ?>>ABARROTES</option>
							<option value="FRUTAS Y VERDURAS" <?php if($row["Categoria"]=='FRUTAS Y VERDURAS') echo 'selected'; ?>>FRUTAS Y VERDURAS</option>
							<option value="CARNES" <?php if($row["Categoria"]=='CARNES') echo 'selected'; ?>>CARNES</option>
							<option value="LACTEOS" <?php if($row["Categoria"]=='LACTEOS') echo 'selected'; ?>>LACTEOS</option>
							<option value="DE LIMPIEZA" <?php if($row["Categoria"]=='DE LIMPIEZA') echo 'selected'; ?>>DE LIMPIEZA</option>
							<option value="LICORES" <?php if($row["Categoria"]=='LICORES') echo 'selected'; ?>>LICORES</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="Codigo_Proveedor" class="col-sm-2 control-label">Codigo Proveedor</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="Codigo_Proveedor" name="Codigo_Proveedor" placeholder="Codigo Proveedor" value="<?php echo $row["Codigo_Proveedor"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="productos.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</div>

			</form>
		</div>
	</body>
</html>
