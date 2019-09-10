<?php
$funcionesEjecutadas = 0;
include("funciones.php");
include("superficie.php");

function recibirRadios($radio1, $radio2, $radio3){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return max(circulo($radio1),circulo($radio2),circulo($radio3)) . "<br>";

}

echo recibirRadios(1, 10, 9);
var_dump($funcionesEjecutadas);
echo cuadrado(4);
var_dump($funcionesEjecutadas);
echo rectangulo(2,3);
var_dump($funcionesEjecutadas);
echo mayor(1,4,5);
var_dump($funcionesEjecutadas);


?>
