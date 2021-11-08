<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM crud_cliente";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Edicion </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../ProyectoWomenStore/crudclientes/estilocrud.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1> INGRESAR DATOS: </h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_cliente" placeholder="id_cliente">
                                    <input type="text" class="form-control mb-3" name="doc_cliente" placeholder="doc_cliente">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="correo">
                                    <input type="text" class="form-control mb-3" name="celular" placeholder="celular">
                                    <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario">
                                    <input type="text" class="form-control mb-3" name="contraseña" placeholder="contraseña">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th> Id_cliente </th>
                                        <th> Doc_cliente </th>
                                        <th> Nombres </th>
                                        <th> Apellidos </th>
                                        <th> Email </th>
                                        <th> N° Celular</th>
                                        <th> Usuario </th>
                                        <th> Contraseña </th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_cliente']?></th>
                                                <th><?php  echo $row['doc_cliente']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['correo']?></th>
                                                <th><?php  echo $row['celular']?></th>  
                                                <th><?php  echo $row['usuario']?></th>
                                                <th><?php  echo $row['contraseña']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['id_cliente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_cliente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>