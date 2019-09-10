<?php

function triangulo($base, $altura){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return ($base * $altura)/2 . "<br>";

}

function rectangulo($base, $altura){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return $base * $altura . "<br>";

}

function cuadrado($lado) {
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return $lado**2 . "<br>";

}

function circulo($radio){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return pi()*($radio**2) . "<br>";

}
