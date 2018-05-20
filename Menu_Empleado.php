<?php	
	include 'conexion.php';
?>

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
		<div class="panel panel-primary">
      		<div class="panel-heading"> <h2 style="text-align:center">Minimercado S.A.</h2></div>			
			<br>
			<div class="row">
				<a href="Consultas.php" class="btn btn-primary btn-lg btn-block btn-md">CONSULTAS RESUMIDAS</a>
			</div>
			<br>
			<div class="row">
				<a href="Estadisticas.php" class="btn btn-primary btn-lg btn-block btn-md">ESTADISTICAS</a>
			</div>
		</div>
		<br>
		<center>
			<a href="index.php" class="btn btn-default">SALIR</a>
		</center>
	</body>
</html>

