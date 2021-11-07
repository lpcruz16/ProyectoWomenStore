<?php
include("conexion.php");
$con=conectar();

$id_cliente=$_POST['id_cliente'];
$doc_cliente=$_POST['doc_cliente'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$celular=$_POST['celular'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];


$sql="INSERT INTO crud_cliente VALUES('$id_cliente','$doc_cliente','$nombres','$apellidos','$correo','$celular','$usuario','$contraseña')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>