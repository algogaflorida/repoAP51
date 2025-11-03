<?php
function numRomano($numero){
    $numerosRomanos=["Nada", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X"];
    return $numerosRomanos[$numero];
}
$num=numRomano(10);
echo $num;