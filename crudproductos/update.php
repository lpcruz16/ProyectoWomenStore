<?php

include("conexion.php");
$con=conectar();

$id_categoria  =$_POST['id_categoria'];
$id_productos   =$_POST['id_productos'];
$nombre         =$_POST['nombre'];
$stock          =$_POST['stock'];
$valorunitario  =$_POST['valorunitario'];

$sql="UPDATE productos SET  id_categoria='$id_categoria',nombre='$nombre',stock='$stock',valorunitario='$valorunitario' WHERE id_productos='$id_productos'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>