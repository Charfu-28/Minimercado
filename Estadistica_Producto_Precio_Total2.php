<?php
    require 'conexion.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
    #container {
    	height: 400px; 
    	min-width: 310px; 
    	max-width: 800px;
    	margin: 0 auto;
    }
		</style>
		<script type="text/javascript">
    $(function () {
    $('#container').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Relacion Productos: Cantidad - Precio Unitario'
        },
        subtitle: {
            text: 'Se muestra el Precio Total de cada Producto'
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            title: {

                text: 'Nombre del Producto'
            },
            categories: 
            [
                <?php
                    $resultados = mysqli_query($conexion, "SELECT Nombre, (Precio * Cantidad) as Total FROM producto order by Total desc");
                    while ($consulta = mysqli_fetch_array($resultados)){
                ?>
                    ['<?php echo $consulta['Nombre']; ?>'],
                <?php
                     }
                ?>
            ]
        },
        yAxis: {
            title: {
                text: 'Valor en ($) del total de cada Producto'
            }
        },
        series: [{
            name: 'Valor Total',
            data: 
            [   <?php
                    $resultados = mysqli_query($conexion, "SELECT Nombre,(Precio * Cantidad) as Total FROM producto order by Total desc");
                    while ($consulta = mysqli_fetch_array($resultados)){
                ?>
                      [<?php echo $consulta['Total'] ?>],
                <?php
                     }
                ?>
           ]
        }]
    });
});
		</script>
	</head>
	<body>

        <script src="js/highcharts.js"></script>
        <script src="js/highcharts-3d.js"></script>
        <script src="js/modules/exporting.js"></script>

        <div id="container" style="height: 400px"></div>
        <br><br><br><br>
        <center>
            <a href="Estadistica_Producto_Precio_Total1.php" class="btn btn-primary btn-sm"> Volver Grafico Anterior</a>
            <br><br>
            <a href="Estadisticas.php" class="btn btn-primary btn-sm">Volver al Menu Principal</a>
        </center>        
	</body>
</html>
