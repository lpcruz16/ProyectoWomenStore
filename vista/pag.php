<?php

session_start();
$sua1=$_SESSION['user'];

echo("Bienvenido sra... $sua1");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pag.css">
    <script src="https://kit.fontawesome.com/04f4556f04.js" crossorigin="anonymous"></script>
    <title>WOMEN STORE/SESION</title>
</head>
<body>
<nav>
<ul class="menu1">
<li ><a href="index.php"><b>INICIO</b></I></a> </li>
<li ><a href="productos.php"><b>PRODUCTOS</b> </a> </li>
<li ><a href="categorias.php"><b>CATEGORIAS</b> </a> </li>
<li ><a href="contacto.php"><b>CONTACTO</b> </a> </li>
<li ><a href="cuenta.php"><b>CUENTA</b> </a> </li>
<li><a href="carro.html"><div class="carro"><i class="fas fa-shopping-cart"></i></div></a> </li>
</ul>
</nav>
<hr>
<br><br>
<i class="fas fa-user"></i><br><br>
IMFORMACION<br>
<br>
 <i class="far fa-calendar-alt"></i><br><br>
 HISTORIAL Y DETALLE DE PEDIDOS <br><br>
 <br><br>
 <i class="fas fa-clipboard"></i><br><br>
 NOTAS DE CREDITO<br><br>
  <i class="fas fa-receipt"></i><br><br>
CUPONES <br><br>
<i class="fas fa-city"></i><br><br>
DIRECCION <br><br>

<form id="form2" name="form2" method="POST" action="../modelo/cerrar.php">
  <table width="31%" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="blue"><input type="submit" name="button" id="button" value="Cerrar Sesion"/></td>
      </table>
      </form>

</body>
</html>