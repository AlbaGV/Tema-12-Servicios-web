<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <div class="container">
            <?php
            $provincia = $_GET['provincia'];
            $request = "http://api.openweathermap.org/data/2.5/weather?q=".$provincia.",\Spain&units=metric&appid=5b8fdea258d86cd74849203729e94494";
            $datos = file_get_contents($request);
            $tiempo = json_decode($datos);
            echo "<h2>El tiempo en ".$provincia."</h2>";
            echo "<p>Temperatura: ".$tiempo->{"main"}->{"temp"}."ºC</p>";
            echo "<p>Humedad: ".$tiempo->{"main"}->{"humidity"}."%</p>";
            echo "<p>Presión: ".$tiempo->{"main"}->{"pressure"}."mb</p>";
            ?>
            <a href="./index.php"><button>Volver</button></a>
        </div>
    </body>
</html>
