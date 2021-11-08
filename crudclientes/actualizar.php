<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM clientes WHERE id_cliente='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form Cliente</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_cliente" value="<?php echo $row['id_cliente']  ?>">
                                <input type="text" class="form-control mb-3" name="Doc_cliente" placeholder="doc_cliente" value="<?php echo $row['Doc_cliente']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="nombres" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Apellido" placeholder="apellidos" value="<?php echo $row['Apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="Correo" placeholder="correo" value="<?php echo $row['Correo']  ?>">
                                <input type="text" class="form-control mb-3" name="Telefono" placeholder="celular" value="<?php echo $row['Telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario" value="<?php echo $row['usuario']  ?>">
                                <input type="text" class="form-control mb-3" name="clave" placeholder="contraseña" value="<?php echo $row['clave']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>