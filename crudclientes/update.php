<?php

include("conexion.php");
$con=conectar();

$id_cliente  =$_POST['id_cliente'];
$doc_cliente =$_POST['Doc_cliente'];
$nombres     =$_POST['Nombre'];
$apellidos   =$_POST['Apellido'];
$correo      =$_POST['Correo'];
$celular     =$_POST['Telefono'];
$usuario     =$_POST['usuario'];
$clave       =$_POST['clave'];

$sql="UPDATE crud_cliente SET  Doc_cliente='$Doc_cliente',Nombre='$Nombre',Apellido='$Apellido',Correo='$Correo',Telefono='$Telefono',usuario='$usuario',clave='$clave' WHERE id_cliente='$id_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>