<?php

/* 
 * La llamada a esta página ha de ser de tipo (Url)?cantidad=4.
 */

$palos = ['Espadas', 'Basto', 'Oro', 'Copa'];
$numeros = ['As','2','3','4','5','6','7','8','9','Sota','Caballo','Rey'];
$numCartas = $_GET['cantidad'];
$baraja = [];
if(($numCartas<=48)&&($numCartas>0)){
    while($numCartas>0){
        $paloSelec = $palos[rand(0,3)];
        $numSelec = $numeros[rand(0,11)];
        $carta = [
          'numero' => $numSelec,
          'palo' => $paloSelec
        ];
        if(!in_array($carta, $baraja)){
         
            $baraja[] = $carta;
            $numCartas--;
            

        }
    }
    echo json_encode($baraja);
} else {
    echo "Cantidad de cartas incorrecta.";
}