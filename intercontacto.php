<?php

session_start();
$usuario = $_SESSION ['username'];
if (!isset($usuario)){
  header("location: login.php");
}else{

echo " <h3> $usuario </h3>";
echo"<a href='../ProyectoWomenStore/modelo/salir.php'>SALIR </a> ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../ProyectoWomenStore/estilos/contacto.css">
  <script src="https://kit.fontawesome.com/04f4556f04.js" crossorigin="anonymous"></script>
  <title>Contacto </title>
</head>
<body>
  <header>
    <img src="../ProyectoWomenStore/img/logo.jpg"  align="left" width="170px"  height="140px"alt=""><h1 class="women">WOMEN STORE</h1>
    <h3 class="sub"> <p>PRODUCTOS DE BELLEZA Y CUIDADO PERSONAL</p> </h3>
    <br>
<nav>
<ul class="menu1">
<li ><a href="../ProyectoWomenStore/interfazindex.php"><b>INICIO</b></I></a> </li>
<li ><a href="../ProyectoWomenStore/interproductos.php"><b>PRODUCTOS</b> </a> </li>
<li ><a href="../ProyectoWomenStore/intercategorias.php"><b>CATEGORIAS</b> </a> </li>
<li ><a href="../ProyectoWomenStore/intercontacto.php"><b>CONTACTO</b> </a> </li>
<li ><a href="../ProyectoWomenStore/paginaprin.php"><b>MICUENTA</b> </a> </li>
<li ><a href="../ProyectoWomenStore/interellos.php"><b>ELLOS</b> </a> </li>
<li><a href="../ProyectoWomenStore/intercarro.php"><div class="carro"><i class="fas fa-shopping-cart"></i></div></a> </li>
</ul>
</nav> 
</header>  
    <b>Nos Puedes Encontrar En :</b> <br><br>
    <img src="../ProyectoWomenStore/img/ubicacion.jpg" title="ubicacion"alt=""><br>
    Contactanos: <br>
    Siguenos <br>
    Nuestras Redes Sociales <br>
    Instagram: <a href="https://www.instagram.com/womenstore1458?r=nametag">WOMAN STORE</a> <br>
    WOMAN.STORE <br>
    CODIGO QR <br>
   Facebook:<a href="https://www.facebook.com/WomenStore-102504158766530/">WOMAN STORE</a> <br>

<a href="../proyectow/index.php">Inicio</a>
<ul class="menu3">
<li ><a href="../ProyectoWomenStore/condiciones.html "><b>Condiciones</b></I></a> </li>
<li ><a href="../ProyectoWomenStore/quienes.html"><b>¿Quienes somos?</b> </a> </li>
<li ><a href="../ProyectoWomenStore/politica.html"><b>Politica de Privacidad</b> </a> </li>
<li ><a href="../ProyectoWomenStore/preguntas.html"><b>¿Preguntas Frecuentes?</b> </a> </li>
</ul>
  <button><i class="fab fa-facebook"><a href="https://www.facebook.com/WomenStore-102504158766530/"></a></i></button>
  <button><i class="fab fa-whatsapp"></i></button>
  <button><i class="fab fa-instagram"></i></button>

</body>
</html>