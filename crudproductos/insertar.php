<?php
include("conexion.php");
$con=conectar();

$id_productos =$_POST['id_productos'];
$id_categoria =$_POST['id_categoria'];
$nombre       =$_POST['nombre'];
$stock        =$_POST['stock'];
$valorunitario=$_POST['valorunitario'];


$sql="INSERT INTO productos VALUES('$id_productos','$id_categoria','$nombre','$stock','$valorunitario')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>