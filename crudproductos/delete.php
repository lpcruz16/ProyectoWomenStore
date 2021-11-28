<?php

include("conexion.php");
$con=conectar();

$id_productos=$_GET['id'];

$sql="DELETE FROM productos  WHERE id_productos='$id_productos'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
