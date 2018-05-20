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
        ${demo.css}
		</style>
		<script type="text/javascript">
    $(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Relacion Productos: Cantidad - Precio Unitario'
        },
        subtitle: {
            text: 'Se muestra el Precio Total de cada Producto'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{            
            type: 'pie',
            name: 'Valor Total en (%) de Unidades Existentes',
            data: 
            [
                <?php
                    $resultados = mysqli_query($conexion, "SELECT Nombre, (Precio * Cantidad) as Total FROM  producto order by Total desc");
                    while ($consulta = mysqli_fetch_array($resultados)){
                ?>
                      ['<?php echo $consulta['Nombre']; ?>', <?php echo $consulta['Total'] ?>],
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
            <a href="Estadistica_Producto_Precio_Total2.php" class="btn btn-primary btn-sm"> Ver Grafico de Barras</a>
            <br><br>
            <a href="Estadisticas.php" class="btn btn-primary btn-sm">Volver al Menu Principal</a>
        </center>       
	</body>
</html>
