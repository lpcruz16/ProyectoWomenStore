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

$sql="UPDATE crud_cliente SET  doc_cliente='$doc_cliente',nombres='$nombres',apellidos='$apellidos',correo='$correo',celular='$celular',usuario='$usuario',contraseña='$contraseña' WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>