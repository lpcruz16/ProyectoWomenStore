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
  <link rel="stylesheet" href="../ProyectoWomenStore/estilos/index.css">
  <script src="https://kit.fontawesome.com/04f4556f04.js" crossorigin="anonymous"></script>
  <title>Inicio/Women Store</title>
</head>
<body>

<header>
    <!-- <img class="logo" src="../proyectow/img/logo4.gif"> -->
    <h1>WOMEN STORE</h1>
    <h3> <p>PRODUCTOS DE BELLEZA Y CUIDADO PERSONAL</p> </h3>
   <br>
</header> 
<!-- menu de navegacion  -->
<nav>
<ul class="menu1">
<li ><a href="../ProyectoWomenStore/interfazindex.php"><b>INICIO</b></I></a> </li>
<li ><a href="../ProyectoWomenStore/interproductos.php"><b>PRODUCTOS</b> </a> </li>
<li ><a href="../ProyectoWomenStore/intercategorias.php"><b>CATEGORIAS</b> </a> </li>
<li ><a href="../ProyectoWomenStore/intercontacto.php"><b>CONTACTO</b> </a> </li>
<li ><a href="../ProyectoWomenStore/paginaprin.php"><b>MICUENTA</b> </a> </li>
<li ><a href="../ProyectoWomenStore/interellos.php"><b>ELLOS</b> </a> </li>
<li><a href="../ProyectoWomenStore/intercarro.php"><div class="carro"><i class="fas fa-shopping-cart"></i></div></a> </li>
<li><a href="../ProyectoWomenStore/crudclientes/index.php"> <div class="editar"><i class="fas fa-file-signature"></i> </div> <li>
</ul>
</nav> 
</h1>
<!-- fin del menu de navegacion -->
<!-- inicio de section  -->
<section>
  <!-- inicio de slider carrusel de imagenes  -->
  <div class="container">
  <ul class="slider">
    <li id="slide1">
      <img src="../ProyectoWomenStore/img/perfume12.jpg" alt="Perfumes" title="Perfumes">
    </li>
    <li id="slide2">
      <img src="../ProyectoWomenStore/img/labial.jpg"/>
    </li>
    <li id="slide3">
      <h2>15% COMPRAS SUPERIORES A $50.000 / DESPACHAMOS TU PEDIDO EN 24 HRS</h2>
      <p><a href="../ProyectoWomenStore/regalos.html">¡Regalos!</a></p>
      <a href="https://kikopalomares.com/">¡Visitanos en nuestras redes sociales</a>
    </li>
     <li id="slide4">
      <img src="../ProyectoWomenStore/img/nutribela.jpg"/>
    </li>
     <li id="slide5">
      <img src="../ProyectoWomenStore/img/keratina.jpg"/>
    </li>
     <li id="slide6">
      <img src="../ProyectoWomenStore/img/mascara.jpg"/>
    </li>
  </ul>
  <!-- fin parte 1 slider -->
  <ul class="menu2">
    <li>
      <a href="#slide1"></a>
    </li>
    <li>
      <a href="#slide2"></a>
    </li>
     <li>
      <a href="#slide3"></a>
    </li>
     <li>
      <a href="#slide4"></a>
    </li>
    <li>
      <a href="#slide5"></a>
    </li>
     <li>
      <a href="#slide6"></a>
    </li>
  </ul>
</div>
<!-- fin slaider  -->
<!-- inicio de las imagenes de muestra  -->
<table>
<tr>
<td><img src="../ProyectoWomenStore/img/maria1.jpeg" width="560px" height="425px"alt=""></td>
<td> <h3>TIENDA EN LINEA DONDE PODRAS :</h3>

<b><a href="../ProyectoWomenStore/tomarpe.html">✔TOMAR PEDIDO</a></b><br>
<b><a href="../ProyectoWomenStore/finalizar.html">✔FINALIZAR COMPRA</a></b><br>
<b><a href="../ProyectoWomenStore/rastrear.html">✔RASTREAR PEDIDO</a></b><br>
<b><a href="../ProyectoWomenStore/chatear.html">✔CHATEAR CON NOSOTROS</a></b><br>

<td><img src="../ProyectoWomenStore/img/imagen2.jpg" width="560px" height="400px"alt=""></td><hr>
<td><img src="../ProyectoWomenStore/img/imagen3.jpg" width="560px" height="400px"alt=""></td>
</tr>
</table>
</section>
<ul class="menu3">
<li ><a href="../ProyectoWomenStore/condiciones.html "><b>Condiciones</b></I></a> </li>
<li ><a href="../ProyectoWomenStore/quienes.html"><b>¿Quienes somos?</b> </a> </li>
<li ><a href="../ProyectoWomenStore/politicas.html"><b>Politica de Privacidad</b> </a> </li>
<li ><a href="../ProyectoWomenStore/preguntas.html"><b>¿Preguntas Frecuentes?</b> </a> </li>
</ul>
<div>
  <button><a href="#"></a><i class="fab fa-facebook"></i></button>
  <button><a href="#"></a><i class="fab fa-whatsapp"></i></button>
  <button><a href="#"></a><i class="fab fa-instagram"></i></button>
  <button><i class="fab fa-google-play"></i></button>
</div>
<h3>MEDIOS DE PAGO</h3>
<i class="fab fa-cc-mastercard"></i>
<i class="fab fa-cc-visa"></i>
<i class="fab fa-cc-diners-club"></i>
<i class="fab fa-cc-paypal"></i>
<i class="fab fa-cc-amex"></i>
</body>
</html>