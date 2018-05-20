<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/jquery.dataTables.min.css" rel="stylesheet">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
	</head>
	<body>
		<form method="POST" action="Consultas.php">
		<div class="panel panel-primary">
  			<div class="panel-heading">
			<h2 style="text-align:center">Minimercado S.A.</h2>
			<h10 style="text-align:left">CONSULTAS</h10>
			</div>			
			<input type="submit" value="Nombres Clientes" class="btn btn-link" name="btn1"><br>
			<input type="submit" value="Nombres Empleados" class="btn btn-link" name="btn2"><br>
			<input type="submit" value="Nombres Proveedores" class="btn btn-link" name="btn3"><br>
			<input type="submit" value="Productos  - Cantidad" class="btn btn-link" name="btn4"><br>
			<input type="submit" value="Productos 	- Precio" class="btn btn-link" name="btn5"><br><br>
		</div>
		</form>

		<?php
		#######Primera Consulta#######
		if(isset($_POST['btn1']))
		{
			include ("conexion.php");
			$resultados = mysqli_query($conexion, "SELECT * FROM  cliente");
				echo "
					<center>
					<table width =\"60%\" border=\"1\">
					<tr>
						<td><b><center>Codigo</center></b></td>
						<td><b><center>Nombre</center></b></td>
						<td><b><center>Apellido</center></b></td>
					</tr>
					<table>
					</center>";					
			while ($consulta = mysqli_fetch_array($resultados))
			{
				echo "													
					<table width =\"60%\" border=\"1\">					
						<tr>					
							<td width=\"30%\" >".$consulta['Codigo_Cliente']."	</td>
							<td width=\"32%\">".$consulta['Primer_Nombre']."	</td>
							<td width=\"35%\">".$consulta['Primer_Apellido']."</td>					
						</tr>
					</table>";
			}
			mysqli_close($conexion);
		}
		#######Segunda Consulta#######
		if(isset($_POST['btn2']))
		{
			include ("conexion.php");
			$resultados = mysqli_query($conexion, "SELECT * FROM  empleado");
				echo "
					<center>
					<table width =\"60%\" border=\"1\">
					<tr>
						<td><b><center>Codigo</center></b></td>
						<td><b><center>Nombre</center></b></td>
						<td><b><center>Apellido</center></b></td>
					</tr>
					<table>
					</center>";					
			while ($consulta = mysqli_fetch_array($resultados))
			{
				echo "													
					<table width =\"60%\" border=\"1\">					
						<tr>					
							<td width=\"30%\" >".$consulta['Codigo_Empleado']."	</td>
							<td width=\"32%\">".$consulta['Primer_Nombre']."	</td>
							<td width=\"35%\">".$consulta['Primer_Apellido']."</td>					
						</tr>
					</table>";
			}
			mysqli_close($conexion);
		}
		#######Tercera Consulta#######
		if(isset($_POST['btn3']))
		{
			include ("conexion.php");
			$resultados = mysqli_query($conexion, "SELECT * FROM  proveedor");
				echo "
					<center>
					<table width =\"60%\" border=\"1\">
					<tr>
						<td><b><center>Codigo</center></b></td>
						<td><b><center>Nombre</center></b></td>
						<td><b><center>Apellido</center></b></td>
					</tr>
					<table>
					</center>";					
			while ($consulta = mysqli_fetch_array($resultados))
			{
				echo "													
					<table width =\"60%\" border=\"1\">					
						<tr>					
							<td width=\"30%\" >".$consulta['Codigo_Proveedor']."	</td>
							<td width=\"32%\">".$consulta['Primer_Nombre']."	</td>
							<td width=\"35%\">".$consulta['Primer_Apellido']."</td>					
						</tr>
					</table>";
			}
			mysqli_close($conexion);
		}
		#######Cuarta Consulta#######
		if(isset($_POST['btn4']))
		{
			include ("conexion.php");
			$resultados = mysqli_query($conexion, "SELECT * FROM  producto");
				echo "
					<center>
					<table width =\"30%\" border=\"1\">
					<tr>
						<td><b><center>Nombre Producto</center></b></td>
						<td><b><center>Cantidad</center></b></td>						
					</tr>
					<table>
					</center>";					
			while ($consulta = mysqli_fetch_array($resultados))
			{
				echo "													
					<table width =\"30%\" border=\"1\">					
						<tr>					
							<td width=\"61.3%\" >".$consulta['Nombre']."</td>
							<td width=\"32%\">".$consulta['Cantidad']."</td>									
						</tr>
					</table>";
			}
			mysqli_close($conexion);
		}
		#######Quinta Consulta#######
		if(isset($_POST['btn5']))
		{
			include ("conexion.php");
			$Precio = $_POST["Precio"];
			$resultados = mysqli_query($conexion, "SELECT * FROM  producto");
				echo "
					<center>
					<table width =\"30%\" border=\"1\">
					<tr>
						<td><b><center>Nombre Producto</center></b></td>
						<td><b><center>Precio Unitario</center></b></td>						
					</tr>
					<table>
					</center>";					
			while ($consulta = mysqli_fetch_array($resultados))
			{
				echo "													
					<table width =\"30%\" border=\"1\">					
						<tr>					
							<td width=\"38%\" >".$consulta['Nombre']."</td>
							<td width=\"32%\">".$consulta['Precio']."</td>									
						</tr>
					</table>";
			}
			mysqli_close($conexion);
		}
		?>
		<br><br>
		<center>
			<a href="index.php" class="btn btn-default">SALIR</a>
		</center>
	</body>
</html>