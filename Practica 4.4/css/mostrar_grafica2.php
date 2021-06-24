<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafica de temperatura durante 10 hrs</title>
    <link rel="stylesheet" href="./css/chartist.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <script src="./js/chartist.min.js"></script>
</head>
<body>
    <div class="container">
    <div class="centro">
    <h1>Temperaturas tomadas durante 10 horas</h1>
    <span class ="subt">Horario de: 14:00 del dia 23 de Mayo hasta las 10:00 del dia 24 de mayo de 2019</span>
    </div>
    <div class="cr-chart ct-octave">/div>
    <?php 
        
        $archivo = './json/tempMyMByHour-14hrs.json'; 
 
        $handle = fopen($archivo, 'r') 
            or die("Error: No se puede abrir el archivo json"); 
        $size = filesize($archivo); 
        $contenido = fread($handle, $size); 
        fclose($handle); 
        $listaTemper = json_decode($contenido, true); 
        $lista_labels = array(); 
        $lista_valores = array();
        foreach ($listaTemper as $horas => $temp) { 
            $lista_labels[] = $horas; 
            $lista_valores[] = $temp; 
        } 
        ?> 	
        <script>
        var datos={
                labels: [ 
                    '<?php echo $lista_labels[0]; ?>', 
                    '<?php echo $lista_labels[1]; ?>', 
                    '<?php echo $lista_labels[2]; ?>',  
                    '<?php echo $lista_labels[3]; ?>', 
                    '<?php echo $lista_labels[4]; ?>', 
                    '<?php echo $lista_labels[5]; ?>'
                ],
                series: [{
                    name:'serie-1'
                    data: [
                        <?php echo $lista_valores[0]; ?>, 
                        <?php echo $lista_valores[1]; ?>,  
                        <?php echo $lista_valores[2]; ?>,
                        <?php echo $lista_valores[3]; ?>, 
                        <?php echo $lista_valores[4]; ?>, 
                        <?php echo $lista_valores[5]; ?>, 

                    ]
                }]
            };
            var opciones ={
                fullWidth: true,
                showArea: true,
                showLine:false,
                showPoint:false
                chartPadding:{
                    bottom:100,
                    right:35,
                    left:10
                },
                axisX:{
                    position:'start',
                },
                axisY:{
                    type:Chartist.FixedScaleAxis
                    ticks:[0,20,25,30,25,40],
                    low:20,
                    high:40
                },
                series:{
                    'serie-1':{
                        lineSmooth: Chartist.Interpolation.carnidal()
                    }
                }
            };
            var opcionesResponsive = [['Screend and (max-width: 640px)',
        {
            series: {
                'serie-1':{
                    lineSmooth: Chartist.Interpolation.none()
                }
            }
        }    
    ]
];

new Chartist.Line('.ct-chart', datos,opciones,opcionesResponsive);
</script>
</div>
</body>
</html>