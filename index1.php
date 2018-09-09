<!DOCTYPE HTML>
<html>

         <?php
include_once ("crudProduit.php");
$cc=new crudProduit();

$totalPizza = $cc-> calcul_statistique_pizza($cc->conn);
$totalplats = $cc->calcul_statistique_plats($cc->conn);
$totalBaguetteF = $cc->calcul_statistique_baguette_farcie($cc->conn);
    
 
?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'les Produits  en sortie'
        },
        subtitle: {
            text: 'Source: Statistiques des produits'
        },
        xAxis: {
            categories: ['categorie'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Produits',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' millions'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
     series: [{
		 
            name: 'Pourcentage',
            colorByPoint: true,
            data: [{
                name: 'pizza %',
                y: <?php echo $totalPizza[0] ?>
            }, {
                name: 'plats %',
                y: <?php echo $totalplats[0] ?>,
               
            },
			{
                name: 'Baguette Farcie %',
                y: <?php echo $totalBaguetteF[0] ?>,
               
            },
			
			]
        }]
    });
});
		</script>
	</head>
	<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>

	</body>
</html>
