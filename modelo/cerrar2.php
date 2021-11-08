<?php

session_start();
$usuario = $_SESSION ['username'];
if (!isset($Usuariop)){
  header("location: login2.php");
}else{

echo " <h1> bienvenido $usuario </h1>";
echo"<a href='logica/salir2.php'>SALIR </a> ";
}
?>