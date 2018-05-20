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
            text: 'Relacion Productos: Nombre del Producto - Cantidad'
        },
        subtitle: {
            text: 'Se muestra la Cantidad de cada producto en éste momento'
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
            name: 'Cantidad en Porcentaje',
            data: 
            [
                <?php
                    $resultados = mysqli_query($conexion, "SELECT * FROM cliente where Primer_Nombre = 'German'");
                    while ($consulta = mysqli_fetch_array($resultados)){ 
                ?> 
                    ['<?php echo $consulta['Direccion']; ?>',<?php echo $consulta['Telefono'] ?>],
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
            <a href="Estadisticas.php" class="btn btn-primary btn-sm">Volver al Menu Principal</a>
        </center>       
    </body>
</html>
