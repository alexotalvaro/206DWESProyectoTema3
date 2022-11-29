
<?php
$variable1="Jose Luis";
echo "la variable 1 es: $variable1";
echo nl2br("\n");

$variable2=5;
echo "la variable 2 es: $variable2";
echo nl2br("\n");

$variable3=4.5;
echo "la variable 3 es: $variable3";
echo nl2br("\n");

$variable4="true";
echo "la variable 4 es: $variable4";
echo nl2br("\n");

echo "----------------------------------------";
echo nl2br("\n");

print ("la variable 1 con print() es: $variable1");
echo nl2br("\n");
printf("la variable 1 con printf() es: %s",$variable1);
echo nl2br("\n");
echo "Entiendo el que printr() solo funciona con Arrays:";
echo nl2br("\n");
$arr=array("Currito1" => 15, "Currito2" =>35);
print_r($arr);
echo nl2br("\n");
echo "La funcion de php var_dump, muestra el tipo de variable y su contenido";
echo nl2br("\n");
var_dump($variable1);

?>