<?php
include ("../modelo/conexion.php");

session_start();


$contraseña=$_REQUEST['contraseña'];
$Usuario=$_REQUEST['Usuario'];

$sql="SELECT COUNT(*)  as contar from clientes where='Usuario' and 'contraseña'";
$consulta=mysqli_query($conn,$sql);
$lista=mysqli_fetch_array($consulta);

if ($lista['contar']>0) {
    die('El usuario existe');
} else {
    die('contraseña o usuario inconrrecta');
}


?>