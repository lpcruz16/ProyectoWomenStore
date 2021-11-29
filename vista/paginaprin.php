<?php

session_start();
$usuario = $_SESSION ['username'];
if (!isset($usuario)){
  header("location: login.php");
}else{

echo " <h3> $usuario </h3>";
echo"<a href='modelo/salir.php'>SALIR </a> ";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos/pag.css">
    <script src="https://kit.fontawesome.com/04f4556f04.js" crossorigin="anonymous"></script>
    <title>WOMEN STORE/SESION</title>
</head>
<body>
<nav>
<ul class="menu1">
<li ><a href="interfazindex.php"><b>INICIO</b></I></a> </li>
<li ><a href="interproductos.php"><b>PRODUCTOS</b> </a> </li>
<li ><a href="intercategorias.php"><b>CATEGORIAS</b> </a> </li>
<li ><a href="intercontacto.php"><b>CONTACTO</b> </a> </li>
<li ><a href="paginaprin.php"><b>MICUENTA</b> </a> </li>
<li ><a href="interellos.php"><b>ELLOS</b> </a> </li>
<li><a href="intercarro.php"><div class="carro"><i class="fas fa-shopping-cart"></i></div></a> </li>
</ul>
</nav> 
<hr>
<br><br>
<i class="fas fa-user"></i><br><br>
IMFORMACION<br>
<br>
 <i class="far fa-calendar-alt"></i><br><br>
<a href="">HISTORIAL Y DETALLE DE PEDIDOS</a> <br><br>
 <br><br>
 <i class="fas fa-clipboard"></i><br><br>
 <a href="">NOTAS DE CREDITO</a> <br><br>
  <i class="fas fa-receipt"></i><br><br>
 <a href="">CUPONES</a> <br><br>
<i class="fas fa-city"></i><br><br>
<a href="">DIRECCION</a> <br><br> <br><br>
</body>
</html>