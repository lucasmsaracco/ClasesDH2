<?php
foreach ($_POST as $key => $value){

  echo $value . "<br>";

}
var_dump(getAllHeaders());

var_dump($_SERVER);
var_dump($_FILES);
var_dump($_REQUEST);
var_dump($_SESSION);
var_dump($_COOKIES);
var_dump($GLOBALS);
