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
  <link rel="stylesheet" href="../ProyectoWomenStore/estilos/galeria.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://kit.fontawesome.com/04f4556f04.js" crossorigin="anonymous"></script>
  <title>CATEGORIAS</title>
</head>
<body>
<header>
    <!-- <img class="logo" src="../proyectow/img/logo4.gif"> -->
    <h1>WOMEN STORE</h1>
    <h3><p>PRODUCTOS DE BELLEZA Y CUIDADO PERSONAL</p> </h3>
   <br>
</header>
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
  <!-- inicio de cajas-> caja1 ------------------------------------------------------------->
  <div class="galeria">
    <div class="foto">
      <img src="img/depilacion1.jpg" alt="">
    </div>
    <div class="pie">
      <p>Depilacion</p>
      <p><a href="">Ver mas...</a></p>
    </div>
  </div>
  <!-- caja2 ------------------------------------------------->
  <div class="galeria">
    <div class="foto">
      <img src="img/cabello1.jpg" alt="">
    </div>
    <div class="pie">
      <p>CUIDADO DEL CABELLO</p>
      <p><a href="">Ver mas...</a></p>
    </div>
  </div>
  <!-- caja3---------------------------------------------------------- -->
  <div class="galeria">
    <div class="foto">
      <img src="img/crema2.jpg" alt="">
    </div>
    <div class="pie">
      <p>CUIDADO CORPORAL</p>
      <p><a href="">Ver mas...</a></p>
    </div>
  </div>
  <!-- caja4------------------------------------------------- -->
  <div class="galeria">
    <div class="foto">
      <img src="img/esmaltes.jpg" alt="">
    </div>
    <div class="pie">
      <p>MANICURA Y PEDICURA </p>
      <p><a href="">Ver mas...</a></p>
    </div>
  </div>
	  <!-- caja5------------------------------------------------- -->
  <div class="galeria">
    <div class="foto">
      <img src="img/maquillaje.jpg" alt="">
    </div>
    <div class="pie">
      <p>MAQUILLAJE </p>
      <p><a href="">Ver mas...</a></p>
    </div>
  </div>
	  <!-- caja6------------------------------------------------- -->
  <div class="galeria">
    <div class="foto">
      <img src="img/solaru.jpg" alt="">
    </div>
    <div class="pie">
      <p>PROTECCION SOLAR</p>
      <p><a href="">Ver mas...</a></p>
    </div>
  </div>
	  <!-- caja7------------------------------------------------- -->
  <div class="galeria">
    <div class="foto">
      <img src="img/perfume12.jpg" alt="">
    </div>
    <div class="pie">
      <p>FRAGANCIAS </p>
      <p><a href="">Ver mas...</a></p>
    </div>
  </div>
	  <!-- caja4------------------------------------------------- -->
  <div class="galeria">
    <div class="foto">
      <img src="img/tratamientos.jpg" alt="">
    </div>
    <div class="pie">
      <p>TRATAMIENTOS</p>
      <p><a href="">Ver mas...</a></p>
    </div>
  </div>

</body>
</html>