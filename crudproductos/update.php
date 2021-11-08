<?php

include("conexion.php");
$con=conectar();

$id_categorias  =$_POST['id_categorias'];
$id_productos   =$_POST['id_productos'];
$nombrep        =$_POST['nombrep'];
$stock          =$_POST['stock'];
$valorunitario  =$_POST['valorunitario'];

$sql="UPDATE crud_product SET  id_categorias='$id_categorias',nombrep='$nombrep',stock='$stock',valorunitario='$valorunitario' WHERE id_productos='$id_productos'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>