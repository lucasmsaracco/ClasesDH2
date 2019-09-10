<?php
  if($_POST){

    foreach ($_POST as $key => $value) {
      if($value == ""){
        echo "El campo " . $key .  " se encuentra vacio <br>";
      }
    }

    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){

      echo "El email no presenta el formato requerido <br>";

    }

    if($_POST["password"] != $_POST["valpassword"]){

      echo "Las contraseñas no coinciden <br>";

    }

  }
?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>
    <form action="formulario.php" method="post">
      <label for="email">E-mail:</label>
      <input type="text" name="email">
      <br>
      <label for="username">Usuario:</label>
      <input type="text" name="username">
      <br>
      <label for="password">Contraseña:</label>
      <input type="password" name="password">
      <br>
      <label for="valpassword">Confirmar contraseña:</label>
      <input type="password" name="valpassword">
      <br>
      <input type="submit">
    </form>
  </body>
</html>
