<?php

function diferenciaEdad($edad1, $edad2){
    if ($edad1>$edad2){
        $comparacion=$edad1-$edad2;
    } else {
        $comparacion=$edad2-$edad1;
    }
    return $comparacion;
}
$diferencia=diferenciaEdad(10,19);
echo "La diferencia de edad es de $diferencia año/s";