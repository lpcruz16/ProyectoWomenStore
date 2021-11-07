<?php
include("conexion.php");
$con=conectar();

$id_productos=$_POST['id_productos'];
$id_categorias=$_POST['id_categorias'];
$nombrep=$_POST['nombrep'];
$stock=$_POST['stock'];
$valorunitario=$_POST['valorunitario'];


$sql="INSERT INTO crud_product VALUES('$id_productos','$id_categorias','$nombrep','$stock','$valorunitario')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>