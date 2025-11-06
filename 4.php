<?php
$empleados = [
    'Juan'=>[
        'horas' => 40,
        'tarifa' => 15
    ],
    'Perico'=>[
        'horas' => 20,
        'tarifa' => 25
    ],
    'Andrés'=>[
        'horas' => 45
    ],
    ];
function calculaSalario($trabajadores){
    $tarifa=10;
    $salarios=[];
    foreach ($trabajadores as $empleado => $datos){
            if (isset($datos['tarifa'])){
                $salario = $datos['horas'] * $datos['tarifa'];
            } else {
                $salario = $datos['horas'] * $tarifa;
            }
            if ($datos['horas'] > 40){
                $salario+= $salario * 0.25;
            }
            $salarios[$empleado]=$salario;
        }
        return $salarios;
}   
$listaSalarios = calculaSalario($empleados);

foreach ($listaSalarios as $empleado => $salario){
    echo $empleado . " cobra: " . $salario . " €<br>";
}