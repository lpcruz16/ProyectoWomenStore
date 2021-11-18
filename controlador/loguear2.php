<?php
require'../modelo/conexion.php';
session_start();

$Usuariop= $_POST['Usuariop'];
$Clavep = $_POST['Clavep'];

$q = "SELECT count(*) as contar from proveedores where Usuariop ='$Usuariop' and clavep = '$Clavep'";
$consulta =mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if ($array['contar']>0){
  $_SESSION['username'] =$Usuariop;
 header("location: ../paginaprove.html");
}else{
  echo"datos incorrectos";
}

?>