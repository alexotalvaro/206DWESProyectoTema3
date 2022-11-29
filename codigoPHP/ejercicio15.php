<?php
$semana=0;
$aSueldoSemana= array(
"lunes"=>50,
"martes"=>50,
"miercoles"=>80,
"jueves"=>50.03,
"viernes"=>50,
"sabado"=>100,
"domingo"=>110
);

print_r($aSueldoSemana);
$totalSueldo=0;

foreach($aSueldoSemana as $semana => $valores){

    $totalSueldo+=$valores;
}

echo('el sueldo de la semana es: '.$totalSueldo);

