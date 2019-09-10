<?php

function mayor($n1, $n2, $n3 = 100){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return max($n1, $n2, $n3) . "<br>";

}

echo mayor(5,9);

function tabla($base, $limite = 100){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  $array = [];

  for($i = $base; $i <= $limite; $i++){

    $array[] = $i;

  }

  return $array;

}

var_dump(tabla(4));

 ?>
