<!DOCTYPE html>
<!--
La llamada a este servicio debería ser del tipo:
    (url)index.php?moneda=pesetas&dinero=4159.5;
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $moneda = $_GET['moneda'];
            $cantidad = $_GET['dinero'];
            if($dinero>0){
                if($moneda=='euros'){
                    $final = $dinero*166.38;
                    $resultado[] = [
                        'moneda' => 'pesetas',
                        'cantidad'=> $final
                    ];
                    echo json_encode($resultado);
                } else if($moneda=='pesetas'){
                    $final = $dinero/166.38;
                    $resultado[] = [
                        'moneda' => 'euros',
                        'cantidad'=> $final
                    ];
                    echo json_encode($resultado);
                } else{
                    echo "El tipo de moneda ingresado es incorrecto.";
                }
            } else {
                echo "Cantidad incorrecta.";
            }
        ?>
    </body>
</html>