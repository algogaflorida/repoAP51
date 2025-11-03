<?php
$numero=dameNumero(6);
function dameNumero($num){
    $totalLote=[];
    for ($i=0;$i<$num;$i++){
        $lote=rand(1,49);
        $visto=false;
        for ($j=0;$j<count($totalLote);$j++){
            if ($lote==$totalLote[$j]){
            $visto=true;
        }
    }
        if ($visto==true){
            $i--;
        } else {
            $totalLote[]=$lote;
            echo " $lote ";
        }
    }
}
echo $numero;
