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
  <link rel="stylesheet" href="../ProyectoWomenStore/estilos/productos.css">
  <script src="https://kit.fontawesome.com/04f4556f04.js" crossorigin="anonymous"></script>
  <title>Productos/Women Store</title>
</head>
<body>
<header>
  <h1 class="women">WOMEN STORE</h1>
<h3 class="sub"> <p>PRODUCTOS DE BELLEZA Y CUIDADO PERSONAL</p> </h3>
<br>
<nav>
<ul class="menu1">
<li ><a href="../ProyectoWomenStore/index.html"><b>INICIO</b></I></a> </li>
<li ><a href="../ProyectoWomenStore/productos.html"><b>PRODUCTOS</b> </a> </li>
<li ><a href="../ProyectoWomenStore/categorias.html"><b>CATEGORIAS</b> </a> </li>
<li ><a href="../ProyectoWomenStore/contacto.html"><b>CONTACTO</b> </a> </li>
<li ><a href="../ProyectoWomenStore/ellos.html"><b>ELLOS</b> </a> </li>
<li ><a href="../ProyectoWomenStore/cuenta.html"><b>CUENTA</b> </a> </li>
<li><a href="../ProyectoWomenStore/carro.html"><div class="carro"><i class="fas fa-shopping-cart"></i></div></a> </li>
</ul>
</nav>
</header>
<center>
<table>
		<tr>
			<td><a href="../ProyectoWomenStore/regalos.html"><img  src="../ProyectoWomenStore/img/bonita.jpg"title="Regalos"><br>REGALOS </a></a></td>
			<td><a href="../ProyectoWomenStore/ofertas.html"><img src="../ProyectoWomenStore/img/oferta2.jpg"title="Ofertas" ><br>OFERTAS</a></td></b>  
			<td><a href="../ProyectoWomenStore/destacados.html"> <img src="../ProyectoWomenStore/img/destacados.jfif" title="Destacados"><br> DESTACADOS</a></a></td>
		</tr>
	</table>

	
	<h2>Click En Las Imagenes</h2>

  <!-- inicio de cajas-> caja1 ------------------------------------------------------------->
  <div class="galeria">
    <div class="foto">
      <img src="img/1.jpg" alt="">
    </div>
    <div class="pie">
      <h5>Polvos Compacto Marca DAZZLE <br>
      $10.999</h5>
    </div>
  </div>
  <!-- caja2 ------------------------------------------------->
  <div class="galeria">
    <div class="foto">
      <img src="img/cabello1.jpg" alt="">
    </div>
    <div class="pie">
      <h5>SHAMPOO  LOREAL ELVIVE Rizos Definidos
      $17.899</h5>
    </div>
  </div>
  <!-- caja3---------------------------------------------------------- -->
  <div class="galeria">
    <div class="foto">
      <img src="img/crema2.jpg" alt="">
    </div>
    <div class="pie">
      <h5>Crema corporal <br>
      $17.899</h5><br>
    </div>
  </div>
  <!-- caja4------------------------------------------------- -->
  <div class="galeria">
    <div class="foto">
      <img src="img/esmaltes.jpg" alt="">
    </div>
    <div class="pie">
      <h5>Esmaltes EVON<br>
      $4.999</h5><br>
    </div>
  </div>
	  <!-- caja5------------------------------------------------- -->
  <div class="galeria">
    <div class="foto">
      <img src="img/maquillaje.jpg" alt="">
    </div>
    <div class="pie">
      <h5></h5>
      <p><a href="">$17.899</a></p>
    </div>
  </div>
	  <!-- caja6------------------------------------------------- -->
  <div class="galeria">
    <div class="foto">
      <img src="img/solaru.jpg" alt="">
    </div>
    <div class="pie">
    <h5>Protector Solar SUNDAY
      $45.000
    </h5>
     
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
	</center>
	<a href="../ProyectoWomenStore/index.html">Inicio</a>
<ul class="menu3">
<li ><a href="../ProyectoWomenStore/condiciones.html"><b>Condiciones</b></I></a> </li>
<li ><a href="../ProyectoWomenStore/quienes.html"><b>¿Quienes somos?</b> </a> </li>
<li ><a href="../ProyectoWomenStore/politicas.html"><b>Politica de Privacidad</b> </a> </li>
<li ><a href="../ProyectoWomenStore/preguntas.html"><b>¿Preguntas Frecuentes?</b> </a> </li>
</ul>
<div class="con">
  <button><i class="fab fa-facebook"></i></button>
  <button><i class="fab fa-whatsapp"></i></button>
  <button><i class="fab fa-instagram"></i></button>
</div>
</body>
</html>