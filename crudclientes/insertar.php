<?php
include("conexion.php");
$con=conectar();

$id_cliente=$_POST['id_cliente'];
$Doc_cliente=$_POST['Doc_cliente'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];


$sql="INSERT INTO clientes VALUES('$id_cliente','$Doc_cliente','$Nombre','$Apellido','$Correo','$Telefono','$usuario','$clave')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>