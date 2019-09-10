<?php

  $persona = [

    "nombre" => "Jon",
    "apellido" => "Snow",
    "edad" => 27,
    "hobbies" => ["Netflix", "Futbol", "Programar"]

  ];

  $persona["edad"] = 25;
  $persona["direccion"] = "Winterfell";
  $persona["hobbies"][] = "Comer";
  var_dump($persona);

  function numeroMayor($num1, $num2){

    if($num1 > $num2){

      "El numero mayor es $num1";

    } else {

      "El numero mayor es $num2";

    }

  }
  numeroMayor(7,18);

  function imprimirVariable($num1, $num2){

    $numero = rand($num1, $num2);
    if($numero == 3 || $numero == 5) {

      echo $numero . "<br>";

    } else {

      echo "El numero NO es 3 o 5<br>";

    }

  }

    imprimirVariable(1,5);

    function imprimirVariableEntre1Y100(){

      $numero = rand(1, 100);
      if($numero > 50) {

        echo "El numero es mayor a 50 <br>";

      } else {

        echo "El numero es menor a 50 <br>";

      }

    }

    imprimirVariableEntre1Y100();

    function loginCorrecto($user, $pw){

      $nombreDeUsuario = $user;
      $contraseniaDeUsuario = $pw;
      if($nombreDeUsuario=="admin" && $contraseniaDeUsuario==1234) {

        echo "Bienvenido! <br>";

      } else if($nombreDeUsuario != "admin") {

        echo "Error en el usuario <br>";

      } else if(empty($nombreDeUsuario) || empty($contraseniaDeUsuario)) {

        echo "Tenes algun campo vacio <br>";

      } else if($contraseniaDeUsuario != 1234) {

        echo "Error en la contraseña <br>";

      }

    }
    loginCorrecto("admin", "");

    function mayorDeEdad($edad, $casado, $sexo){

      if ($edad >= 18 && !$casado && ($sexo == "Masculino" || $sexo == "Femenino" || $sexo == "Otro")) {

        echo "Bienvenido <br>";

      }

    }

    mayorDeEdad(18, false, "Otro");


    function sexoOtro($edad, $casado, $sexo){

      if ($sexo == "Otro") {

        echo "Bienvenido <br>";

      }

    }

    mayorDeEdad(18, false, "Otro");

    function cantidadDeAlumnos($num){

      if ($num) {

        echo "true <br>";

      } else {

        echo "false <br>";

      }

    }
    cantidadDeAlumnos(-100);
    cantidadDeAlumnos(-1);
    cantidadDeAlumnos(0);
    cantidadDeAlumnos(1);
    cantidadDeAlumnos(100);

    function ifTernario($num) {

      echo $num%2==0 ? "El numero es par <br>":"El numero no es par <br>";

    }

    ifTernario(2);
    ifTernario(3);

    function nota($nota) {

      switch ($nota) {
        case ($nota>=1 && $nota<4):
          echo "Desaprobado<br>";
          break;
        case ($nota==4 || $nota==5):
          echo "Zafamos!!<br>";
          break;
        case ($nota>=6 && $nota<=8):
          echo "Bien!!!!<br>";
          break;
        case ($nota==9):
          echo "MUY Bien!!!<br>";
          break;
        case ($nota==10):
          echo "Excelenteee!!!<br>";
          break;
        default:
          echo "No es una nota existente<br>";
          break;
      }

    }

    nota(3);
    nota(4);
    nota(7);
    nota(9);
    nota(10);
    nota(-1);
    nota(13);

    

?>
