<?php
  function tablaDeMultiplicar(){

    for($i=1; $i<=10; $i++){

      echo $i*2 . "<br>";

    }

  }

  tablaDeMultiplicar();

  function contar100a85(){

    $numero=100;
    while($numero>=85){

      echo $numero . "<br>";
      $numero--;

    }

  }

  contar100a85();

  function imprimirContador(){

    $contador=1;
    while($contador<=5){

      echo $contador*2 . "<br>";
      $contador++;
    }

  }

  imprimirContador();

  function tirarMoneda(){

    $tiros=0;
    $cantidadDeVeces=0;
    while($cantidadDeVeces<5){

        $tiros++;
        $resultadoDeRand = rand(0,1);
        if($resultadoDeRand==1){

          $cantidadDeVeces++;

        }

    }

    echo $tiros . "<br>";

  }

  tirarMoneda();

  $nombres = ["Lucas", "Francisco", "Pablo", "Tomas", "Tom"];

  echo "<h2> Con FOR </h2>";

  for($i=0; $i<5; $i++){

    echo $nombres[$i] . "<br>";

  }

  echo "<h2> Con WHILE </h2>";

  $contador=0;
  while($contador<count($nombres)){

    echo $nombres[$contador] . "<br>";
    $contador++;

  }

  echo "<h2> Con DO WHILE </h2>";

  $contador2=0;
  do {
    echo $nombres[$contador2] . "<br>";
    $contador2++;
  } while($contador2<count($nombres));

  echo "<h2> Con FOREACH </h2>";

  foreach($nombres as $valores){
    echo $valores . "<br>";
  }

  echo "<h2> EJERCICIO 6 </h2>";

  for($i=0; $i<11; $i++){

    $array[] = rand(0,10);

  }

  foreach($array as $value){

    if ($value==5){

      echo "Se encontró un 5!" . "<br>";
      break;

    }

  }

  echo "<h2> EJERCICIO 7 </h2>";

  for($i=0; $i<10; $i++){

    $array2[] = rand(0,10);

  }

  $numerosPares = 0;

  foreach($array2 as $value2){

    if($value2%2==0){

      $numerosPares++;

    }

  }

  echo $numerosPares . "<br>";

  echo "<h2> EJERCICIO 8 </h2>";

  $mascota = [
    "Animal" => "Perro",
    "Edad" => 5,
    "Altura" => 0.60,
    "Nombre" => "Sonic",
  ];

  foreach($mascota as $key => $value){

    echo $key . ": " . $value . "<br>";

  }

  echo "<h2> EJERCICIO 9 </h2>";

  $ceu = ["Italia"=>"Roma",
  "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin",
  "Holanda" => "Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga",
   "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw"];

   foreach($ceu as $key => $value){

     echo $value . ": " . $key . "<br>";

   }

   echo "<h2> EJERCICIO 10 </h2>";

   $ceu = [

        "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],

        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],

        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],

        "Francia" => ["Paris", "Nantes", "Lyon"],

        "Italia" => ["Roma", "Milan", "Venecia"],

        "Alemania" => ["Munich", "Berlin", "Frankfurt"]

    ];

 ?>
